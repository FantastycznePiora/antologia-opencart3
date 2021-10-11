<?php
	/*
	 * A simple received_orders model
	 * 
	 * This model is intended to the received orders from database
	 *
	 * This model also return the total received orders
	 *
	 * @author Turaab Ali
	 * @version 1.0
	 * 
	*/
	class ModelPurchaseReceivedOrders extends Model {
		/** 
		 * fetching all the received orders from database.
		 * 
		 * accepts one parameter as an array
		 * 
		 * @param $data array of filters to perform on received orders
		 * @return all the received orders
		 */ 
			
		public function getReceivedOrders($data = array())
		{
			$limit = "SELECT DISTINCT order_id FROM received_orders WHERE receive_bit = 1";
			
			$sql = "SELECT * FROM received_orders WHERE receive_bit = 1";
			
			if(empty($data['start_date']) && empty($data['end_date'])){
				//do nothing
			}
			else{
				//startdate manipulation
				if(!empty($data['start_date'])){
					$data['start_date'] = strtotime($data['start_date']);
					$data['start_date'] = date('Y-m-d',$data['start_date']);
				}
				else{
					$data['start_date'] = date('Y-m-d');
				}
				
				//enddate manipulation
				if(!empty($data['end_date'])){
					$data['end_date'] = strtotime($data['end_date']);
					$data['end_date'] = date('Y-m-d',$data['end_date']);
				}
				else{
					$data['end_date'] = date('Y-m-d');
				}
			}
			
			if(!empty($data['supplier'])){
				$sql = $sql . " AND received_orders.sname = '" .$data['supplier']."'";
				$limit = $limit . " AND received_orders.sname = '" .$data['supplier']."'";
			}
			
			if(!empty($data['product'])){
				$sql = $sql . " AND received_orders.name = '" .$data['product']."'";
				$limit = $limit . " AND received_orders.name = '" .$data['product']."'";
			}
			
			if(!empty($data['order_id'])){
				$sql = $sql . " AND received_orders.order_id = ".$data['order_id'];
				$limit = $limit . " AND received_orders.order_id = ".$data['order_id'];
			}
			
			if(!empty($data['start_date']) && !empty($data['end_date'])){
				$sql = $sql . " AND (receive_date BETWEEN '".$data['start_date']."' AND '".$data['end_date']."')";
				$limit = $limit . " AND (receive_date BETWEEN '".$data['start_date']."' AND '".$data['end_date']."')";
			}
			
			$limit = $limit . " LIMIT " . $data['start'] . "," . $data['limit'];
			$limit = $this->db->query($limit);
			$limit = array_map('current', $limit->rows);
			$limit = implode(',',$limit);
			
			if(empty($limit)) {
				$limit = "0";
			}
			
			//if export bit is not set
			if(!isset($this->request->get['export'])){
				$sql = $sql . " AND order_id IN(".$limit.")";
			}
			
			$query = $this->db->query($sql);
			
			$orders = array();
			foreach($query->rows as $order){
				$orders[$order['order_id']]['order_date'] = $order['order_date'];
				$orders[$order['order_id']]['order_id'] = $order['order_id'];
				$orders[$order['order_id']]['receive_date'] = $order['receive_date'];
				$orders[$order['order_id']]['quantity'] = $order['quantity'];
				$orders[$order['order_id']]['sprice'][$order['product_id']][] = $order['sprice'];
				$orders[$order['order_id']]['price'][$order['product_id']][] = $order['price'];
				$orders[$order['order_id']]['sname'][$order['product_id']][] = $order['sname'];
				$orders[$order['order_id']]['product'][$order['product_id']][] = $order['name'];
				$orders[$order['order_id']]['squantity'][$order['product_id']][] = $order['rd_quantity'];
			}
			
			return $orders;
		}
		
		/** 
		 * getting the count of received orders.
		 * 
		 * accepts one parameter as an array
		 * 
		 * @param $data array of filters to perform on received orders count
		 * @return all the count of received orders
		 */ 
		
		public function getTotalReceivedOrders($data=array())
		{
			$sql = "SELECT COUNT(DISTINCT order_id) AS total FROM received_orders WHERE receive_bit = 1";
			
			if(empty($data['start_date']) && empty($data['end_date'])){
				//do nothing
			}
			else{
				//startdate manipulation
				if(!empty($data['start_date'])){
					$data['start_date'] = strtotime($data['start_date']);
					$data['start_date'] = date('Y-m-d',$data['start_date']);
				}
				else{
					$data['start_date'] = date('Y-m-d');
				}
				
				//enddate manipulation
				if(!empty($data['end_date'])){
					$data['end_date'] = strtotime($data['end_date']);
					$data['end_date'] = date('Y-m-d',$data['end_date']);
				}
				else{
					$data['end_date'] = date('Y-m-d');
				}
			}
			
			if(!empty($data['supplier'])){
				$sql = $sql . " AND received_orders.sname = '" .$data['supplier']."'";
			}
			
			if(!empty($data['product'])){
				$sql = $sql . " AND received_orders.name = '" .$data['product']."'";
			}
			
			if(!empty($data['order_id'])){
				$sql = $sql . " AND received_orders.order_id = ".$data['order_id'];
			}
			
			if(!empty($data['start_date']) && !empty($data['end_date'])){
				$sql = $sql . " AND (receive_date BETWEEN '".$data['start_date']."' AND '".$data['end_date']."')";
			}
			
			$query = $this->db->query($sql);
			return $query->row['total'];
		}
		
		/** 
		 * fetch all suppliers of orders.
		 * 
		 * @return all suppliers of the store
		 */
		
		public function getAllSuppliers()
		{
			$query = $this->db->query("SELECT 
			CONCAT(first_name,' ',last_name) AS supplier_name
			FROM
			".DB_PREFIX."po_supplier WHERE delete_bit = 0");
			return $query->rows;
		}
		
	}
?>