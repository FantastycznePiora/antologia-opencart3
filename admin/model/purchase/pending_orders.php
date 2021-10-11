<?php
	/*
	 * A simple pending orders model
	 * 
	 * This model is intended to the pending orders from database
	 *
	 * This model also return the total pending orders
	 *
	 * @author Turaab Ali
	 * @version 1.0
	 * 
	*/
	class ModelPurchasePendingOrders extends Model {
		/** 
		 * fetching all the pending orders from database.
		 * 
		 * accepts one parameter as an array
		 * 
		 * @param $data array of filters to perform on received orders
		 * @return all the received orders
		 */ 
		public function getPendingOrders($data=array())
		{
			$sql = "SELECT
			`".DB_PREFIX."po_supplier`.`first_name`
			, `".DB_PREFIX."po_supplier`.`last_name`
			, SUM(`".DB_PREFIX."po_product`.`quantity`) as total_quantity
			, `".DB_PREFIX."po_order`.`order_date`
			, `".DB_PREFIX."po_order`.`id`
			, ".DB_PREFIX."po_order.`pre_supplier_bit`
			FROM
			`".DB_PREFIX."po_product`
			INNER JOIN `".DB_PREFIX."po_receive_details` 
				ON (`".DB_PREFIX."po_product`.`id` = `".DB_PREFIX."po_receive_details`.`product_id`)
			INNER JOIN `".DB_PREFIX."po_order` 
				ON (`".DB_PREFIX."po_order`.`id` = `".DB_PREFIX."po_product`.`order_id`)
			INNER JOIN `".DB_PREFIX."po_supplier` 
				ON (`".DB_PREFIX."po_supplier`.`id` = `".DB_PREFIX."po_receive_details`.`supplier_id`) WHERE ".DB_PREFIX."po_order.`pending_bit` = 1 AND `".DB_PREFIX."po_order`.`delete_bit` = 1 GROUP BY (".DB_PREFIX."po_order.`id`) ORDER BY (".DB_PREFIX."po_order.id) DESC";
			
			if (!isset($this->request->get['export'])) {
				$sql = $sql .  " LIMIT ".$data['start'].",".$data['limit'];
			}
			
			$query = $this->db->query($sql);
			
			return $query->rows;
		}
		
		/** 
		 * getting the count of pending orders.
		 * 
		 * accepts one parameter as an array
		 * 
		 * TODO: @param $data array of filters to perform on pending orders count
		 * @return all the count of pending orders
		 */
		
		public function getTotalOrders()
		{
			$query = "SELECT
			COUNT(DISTINCT `".DB_PREFIX."po_order`.`id`) AS total
			FROM
			`".DB_PREFIX."po_product`
			INNER JOIN `".DB_PREFIX."po_receive_details` 
				ON (`".DB_PREFIX."po_product`.`id` = `".DB_PREFIX."po_receive_details`.`product_id`)
			INNER JOIN `".DB_PREFIX."po_order` 
				ON (`".DB_PREFIX."po_order`.`id` = `".DB_PREFIX."po_product`.`order_id`)
			INNER JOIN `".DB_PREFIX."po_supplier` 
				ON (`".DB_PREFIX."po_supplier`.`id` = `".DB_PREFIX."po_receive_details`.`supplier_id`) WHERE ".DB_PREFIX."po_order.`pending_bit` = 1 AND `".DB_PREFIX."po_order`.`delete_bit` = 1;";
			
			$query = $this->db->query($query);
			
			return $query->row['total'];
		}
	}
?>