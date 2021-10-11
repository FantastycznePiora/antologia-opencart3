<?php

class ModelPurchasePurchaseOrder extends Model 
{
	/** 
	 * Inserting purchase order to database .
	 * 
	 * Accepts one parameter as an array
	 * 
	 * @param $data, holds information to insert
	 * @return order id
	 * Developed By: Turaab Ali
	 * Date: 21-3-2017
	 */ 
	 
	public function insert_purchase_order($data = array())
	{
		//insert order details
		if ($data['supplier_id'] != "--Supplier--") {
			
			$this->db->query("INSERT INTO ".DB_PREFIX."po_order (order_date,user_id,pre_supplier_bit) VALUES('" . date('Y-m-d') . "',".$this->session->data['user_id'].",1)");
			$order_id = $this->db->getLastId();
		} else {
			
			$this->db->query("INSERT INTO ".DB_PREFIX."po_order (order_date,user_id) VALUES('" . date('Y-m-d') . "',".$this->session->data['user_id'].")");
			$order_id = $this->db->getLastId();
		}
		
		//insert product details
		
		$iproduct_ids = array();
		$quantities = array();
		
		foreach ($data['product'] as $product) {
			$id_name = explode('_',$product['id_name']);
			$product_id = $id_name[0];
			$product_name = $id_name[1];
			$quantity = $product['quantity'];
			$this->db->query("INSERT INTO ".DB_PREFIX."po_product (product_id,name,quantity,order_id)	VALUES(".$product_id.",'".$product_name. "'," . $quantity.",".$order_id.")");
			$iproduct_id = $this->db->getLastId();
			
			//storing product_ids and quantity for receive details
			$iproduct_ids[] = $iproduct_id;
			$quantities[] = $quantity;
			
			for($i=0; $i<count($product['options']); $i++){
				
				//to let the user to add without options
				if($product['options'][$i]==''){
					$product['options'][$i] = '0_option';
				}
				
				//inserting options
				$option_id_name = explode('_',$product['options'][$i]);
				$option_id = $option_id_name[0];
				$option_name = $option_id_name[1];
				$this->db->query("INSERT INTO ".DB_PREFIX."po_attribute_group (attribute_group_id,name,product_id) VALUES(".$option_id .",'".$option_name."',".$iproduct_id.")");
				$ioption_id = $this->db->getLastId();
				
				//to let the user to add order without option values
				if($product['option_values'][$i]==''){
					$product['option_values'][$i] = '0_optionvalue';
				}
				
				//inserting option values
				$value_id_name = explode('_',$product['option_values'][$i]);
				$option_value_id = $value_id_name[0];
				$option_value_name = $value_id_name[1];
				$this->db->query("INSERT INTO ".DB_PREFIX."po_attribute_category (attribute_category_id,name,attribute_group_id) VALUES(".$option_value_id.",'".$option_value_name."',".$ioption_id.")");
				$ioption_value = $this->db->getLastId();
			}	
		}
		
		if($data['supplier_id'] != "--Supplier--"){
			for($i = 0; $i<count($iproduct_ids); $i++){
				$query = $this->db->query("INSERT INTO ".DB_PREFIX."po_receive_details (quantity,product_id,supplier_id,order_id) VALUES(".$quantities[$i].",".$iproduct_ids[$i].",".$data['supplier_id'].",".$order_id.")");
			}
		}
		else{
			for($i = 0; $i<count($iproduct_ids); $i++){
				$query = $this->db->query("INSERT INTO ".DB_PREFIX."po_receive_details (product_id,supplier_id,order_id) VALUES(".$iproduct_ids[$i].",-1,".$order_id.")");
			}
		}
		
		return $order_id;
	}
	
	public function getList($start,$limit)
	{
		$query = $this->db->query("SELECT
			".DB_PREFIX."po_order.*
			, ".DB_PREFIX."user.firstname
			, ".DB_PREFIX."user.lastname
			, ".DB_PREFIX."po_supplier.first_name
			, ".DB_PREFIX."po_supplier.last_name
			FROM
			".DB_PREFIX."po_order
			INNER JOIN ".DB_PREFIX."po_receive_details
				ON (".DB_PREFIX."po_order.id = ".DB_PREFIX."po_receive_details.order_id)
			INNER JOIN ".DB_PREFIX."po_supplier 
				ON (".DB_PREFIX."po_receive_details.supplier_id = ".DB_PREFIX."po_supplier.id)
			INNER JOIN ".DB_PREFIX."user 
				ON (".DB_PREFIX."po_order.user_id = ".DB_PREFIX."user.user_id) WHERE ".DB_PREFIX."po_order.delete_bit = 1 GROUP BY ".DB_PREFIX."po_order.id ORDER BY ".DB_PREFIX."po_order.id DESC LIMIT " . $start . "," . $limit);
		return $query->rows;
	}
	public function getTotalOrders()
	{
		$query = $this->db->query("SELECT
			".DB_PREFIX."po_order.*
			, ".DB_PREFIX."user.firstname
			, ".DB_PREFIX."user.lastname
			, ".DB_PREFIX."po_supplier.first_name
			, ".DB_PREFIX."po_supplier.last_name
			FROM
			".DB_PREFIX."po_order
			INNER JOIN ".DB_PREFIX."po_receive_details
				ON (".DB_PREFIX."po_order.id = ".DB_PREFIX."po_receive_details.order_id)
			INNER JOIN ".DB_PREFIX."po_supplier 
				ON (".DB_PREFIX."po_receive_details.supplier_id = ".DB_PREFIX."po_supplier.id)
			INNER JOIN ".DB_PREFIX."user 
				ON (".DB_PREFIX."po_order.user_id = ".DB_PREFIX."user.user_id) WHERE ".DB_PREFIX."po_order.delete_bit = 1 GROUP BY ".DB_PREFIX."po_order.id");
		return count($query->rows);
	}
	
	/** 
	 * Getting single order details
	 * 
	 * Accepts one parameter order id
	 * 
	 * @param $order_id, for which to view information
	 * @return order information
	 * Developed By: Turaab Ali
	 * Date: 21-3-2017
	 */ 
	
	public function view_order_details($order_id)
	{
		$query = $this->db->query("SELECT
		CONCAT(`".DB_PREFIX."user`.`firstname`, ' ' ,`".DB_PREFIX."user`.`lastname`) AS user_name
		, `".DB_PREFIX."po_order`.`id` as order_id
		, `".DB_PREFIX."po_order`.`receive_bit` as received
		, `".DB_PREFIX."po_order`.`receive_date` as order_receive_date
		, `".DB_PREFIX."po_order`.`order_date`
		, `".DB_PREFIX."po_order`.`receive_date`
		, `".DB_PREFIX."po_product`.`name` AS product_name
		, `".DB_PREFIX."po_product`.`product_id`
		, `".DB_PREFIX."po_product`.`id` AS cproduct_id
		, `".DB_PREFIX."po_product`.`quantity`
		, `".DB_PREFIX."po_product`.`received_products`
		, `".DB_PREFIX."po_receive_details`.`quantity` AS squantity
		, `".DB_PREFIX."po_receive_details`.`price` AS sprice
		, (`".DB_PREFIX."po_receive_details`.`quantity`*`".DB_PREFIX."po_receive_details`.`price`) AS total_sprice
		, CONCAT(`".DB_PREFIX."po_supplier`.`first_name`,' ',`".DB_PREFIX."po_supplier`.`last_name`) AS supplier_name 
		, `".DB_PREFIX."po_supplier`.`id` AS supplier_id 
		, `".DB_PREFIX."po_attribute_category`.`name` AS option_value_name
		, `".DB_PREFIX."po_attribute_category`.`id` AS option_value_id
		FROM
		`".DB_PREFIX."po_order`
		INNER JOIN `".DB_PREFIX."po_product` 
			ON (`".DB_PREFIX."po_order`.`id` = `".DB_PREFIX."po_product`.`order_id`)
		INNER JOIN `".DB_PREFIX."user` 
			ON (`".DB_PREFIX."po_order`.`user_id` = `".DB_PREFIX."user`.`user_id`)
		INNER JOIN `".DB_PREFIX."po_receive_details` 
			ON (`".DB_PREFIX."po_product`.`id` = `".DB_PREFIX."po_receive_details`.`product_id`)
		INNER JOIN `".DB_PREFIX."po_attribute_group` 
			ON (`".DB_PREFIX."po_product`.`id` = `".DB_PREFIX."po_attribute_group`.`product_id`)
		INNER JOIN `".DB_PREFIX."po_supplier` 
			ON (`".DB_PREFIX."po_supplier`.`id` = `".DB_PREFIX."po_receive_details`.`supplier_id`)
		INNER JOIN `".DB_PREFIX."po_attribute_category` 
        ON (`".DB_PREFIX."po_attribute_group`.`id` = `".DB_PREFIX."po_attribute_category`.`attribute_group_id`)	WHERE `".DB_PREFIX."po_order`.`id` = " . $order_id);
		//print_r($query->rows);
		//exit;
		$products = array();
		$order = array();
		foreach($query->rows as $row){
			//order common information
			$order = array(
				
				'order_date' => $row['order_date'],
				'received' => $row['received'],
				'receive_date' => $row['receive_date'],
				'order_by' => $row['user_name'],
				'order_id' => $row['order_id'],
				'order_receive_date' => $row['order_receive_date']
			);
			
			$index = $row['product_id'].'_'.$row['cproduct_id'];
			
			$products[$index]['product_name'] = $row['product_name'];
			$products[$index]['quantity'] = $row['quantity'];
			$products[$index]['received_products'] = $row['received_products'];
			$products[$index]['option_value_name'][$row['option_value_id']] = ($row['option_value_name'] != 'optionvalue') ? $row['option_value_name'] : '';
			$products[$index]['suppliers'][$row['supplier_id']] = $row['supplier_name'];
			$products[$index]['squantity'][$row['supplier_id']] = $row['squantity'];
			$products[$index]['total_sprice'][$row['supplier_id']] = ($row['total_sprice']>0) ? round($row['total_sprice'],2) : '';
			
			//used in receive order
			$products[$index]['supplier_ids'][$row['supplier_id']] = $row['supplier_id'];
			$products[$index]['receive_quantities'][$row['supplier_id']] = ($row['squantity'] > 0) ? $row['squantity'] : '';
			$products[$index]['prices'][$row['supplier_id']] = ($row['sprice'] > 0) ? $row['sprice'] : '';
			
		}
		return array(
			"order_info" => $order,
			"products" => $products
		);
	}
	
	public function delete($ids)
	{
		$deleted = false;
		foreach($ids as $id)
		{
			if($this->db->query("UPDATE ".DB_PREFIX."po_order SET delete_bit = " . 0 ." WHERE id = " . $id))
				$deleted = true;
		}
		if($deleted)
		{
			return $deleted;
		}
		else
		{
			return false;
		}
	}
	public function filterCount($filter)
	{
		if(isset($filter['from']))
		{
			$filter['from'] = strtotime($filter['from']);
			$filter['from'] = date('Y-m-d',$filter['from']);
		}
		
		if(isset($filter['to']))
		{
			$filter['to'] = strtotime($filter['to']);
			$filter['to'] = date('Y-m-d',$filter['to']);
		}
		
		$query = "SELECT
			".DB_PREFIX."po_order.*
			, ".DB_PREFIX."user.firstname
			, ".DB_PREFIX."user.lastname
			, ".DB_PREFIX."po_supplier.first_name
			, ".DB_PREFIX."po_supplier.last_name
			FROM
			".DB_PREFIX."po_order
			INNER JOIN ".DB_PREFIX."po_receive_details
				ON (".DB_PREFIX."po_order.id = ".DB_PREFIX."po_receive_details.order_id)
			INNER JOIN ".DB_PREFIX."po_supplier 
				ON (".DB_PREFIX."po_receive_details.supplier_id = ".DB_PREFIX."po_supplier.id)
			INNER JOIN ".DB_PREFIX."user 
				ON (".DB_PREFIX."po_order.user_id = ".DB_PREFIX."user.user_id) WHERE ".DB_PREFIX."po_order.delete_bit = 1";
		
		if(isset($filter['filter_id']))
		{
			$query = $query . " AND ".DB_PREFIX."po_order.id = " . $filter['filter_id'];
		}
		
		if(isset($filter['status']))
		{
			$query = $query . " AND receive_bit = " . $filter['status'];
		}
		
		if(isset($filter['from']) && isset($filter['to']))
		{
			$query = $query . " AND order_date BETWEEN '" . $filter['from'] . "' AND '" . $filter['to'] . "'";
		}
		elseif(isset($filter['from']))
		{
			$filter['to'] = date('Y-m-d');
			
			$query = $query . " AND order_date BETWEEN '" . $filter['from'] . "' AND '" . $filter['to'] . "'";
		}
		elseif(isset($filter['to']))
		{
			$filter['from'] = date('Y-m-d');
			
			$query = $query . " AND order_date BETWEEN '" . $filter['from'] . "' AND '" . $filter['to'] . "'";
		}
		
		$query = $query . " GROUP BY (".DB_PREFIX."po_order.id) ORDER BY ".DB_PREFIX."po_order.id DESC";
		
		$query = $this->db->query($query);
		
		return count($query->rows);
	}
	public function filter($filter,$start,$limit){
		
		if(isset($filter['from']))
		{
			$filter['from'] = strtotime($filter['from']);
			$filter['from'] = date('Y-m-d',$filter['from']);
		}
		
		if(isset($filter['to']))
		{
			$filter['to'] = strtotime($filter['to']);
			$filter['to'] = date('Y-m-d',$filter['to']);
		}
		
		$query = "SELECT
			".DB_PREFIX."po_order.*
			, ".DB_PREFIX."user.firstname
			, ".DB_PREFIX."user.lastname
			, ".DB_PREFIX."po_supplier.first_name
			, ".DB_PREFIX."po_supplier.last_name
			FROM
			".DB_PREFIX."po_order
			INNER JOIN ".DB_PREFIX."po_receive_details
				ON (".DB_PREFIX."po_order.id = ".DB_PREFIX."po_receive_details.order_id)
			INNER JOIN ".DB_PREFIX."po_supplier 
				ON (".DB_PREFIX."po_receive_details.supplier_id = ".DB_PREFIX."po_supplier.id)
			INNER JOIN ".DB_PREFIX."user 
				ON (".DB_PREFIX."po_order.user_id = ".DB_PREFIX."user.user_id) WHERE ".DB_PREFIX."po_order.delete_bit = 1";
		
		if(isset($filter['filter_id']))
		{
			$query = $query . " AND ".DB_PREFIX."po_order.id = " . $filter['filter_id'];
		}
		
		if(isset($filter['status']))
		{
			$query = $query . " AND receive_bit = " . $filter['status'];
		}
		
		if(isset($filter['from']) && isset($filter['to']))
		{
			$query = $query . " AND order_date BETWEEN '" . $filter['from'] . "' AND '" . $filter['to'] . "'";
		}
		elseif(isset($filter['from']))
		{
			$filter['to'] = date('Y-m-d');
			
			$query = $query . " AND order_date BETWEEN '" . $filter['from'] . "' AND '" . $filter['to'] . "'";
		}
		elseif(isset($filter['to']))
		{
			$filter['from'] = date('Y-m-d');
			
			$query = $query . " AND order_date BETWEEN '" . $filter['from'] . "' AND '" . $filter['to'] . "'";
		}
		
		$query = $query . " GROUP BY (".DB_PREFIX."po_order.id) ORDER BY ".DB_PREFIX."po_order.id DESC LIMIT ". $start ."," . $limit;
		$query = $this->db->query($query);
		return $query->rows;
	}

	/*-----------------------------insert receive order function starts here-------------------*/
	
	public function insert_receive_order($data,$order_id)
	{
		if($data['order_receive_date'] != ''){
			$data['order_receive_date'] = strtotime($data['order_receive_date']);
			$data['order_receive_date'] = date('Y-m-d',$data['order_receive_date']);
		}
		
		$this->db->query("UPDATE ".DB_PREFIX."po_order SET receive_date = '" .$data['order_receive_date']."', receive_bit = " . 1 . ", pending_bit = " . 0 . " WHERE id = " . $order_id);
		
		//$query = $this->db->query("SELECT * FROM ".DB_PREFIX."po_receive_details WHERE order_id=".$order_id);
			
		$this->db->query("DELETE FROM ".DB_PREFIX."po_receive_details WHERE order_id=".$order_id);
		
		foreach($data['product'] as $key => $product){
			$cp = explode('_',$key);
			$product_id = $cp[0];
			$cproduct_id = $cp[1];
			$quantity = 0;
			$count = count($product['supplier']);
			
			for($i = 0; $i<$count; $i++){
				
				$quantity = $quantity + $product['receive_quantity'][$i];
				$this->db->query("UPDATE ".DB_PREFIX."po_product SET received_products = " . $quantity . " WHERE product_id = " . $product_id . " AND order_id = " . $order_id);
				$this->db->query("INSERT INTO ".DB_PREFIX."po_receive_details (quantity,price,product_id,supplier_id,order_id) VALUES(".$product['receive_quantity'][$i].",".$product['price'][$i].",".$cproduct_id.",".$product['supplier'][$i].",".$order_id.")");
				$this->db->query("UPDATE ".DB_PREFIX."product SET quantity = (quantity+" . $quantity . ") WHERE product_id = " . $product_id);
			}
		}
		
		return true;
	}
	
	/*-----------------------------insert receive order function ends here-----------------*/
	
	public function getProductSuggestions($product_data)
	{
		$query = $this->db->query("SELECT
		`".DB_PREFIX."product_description`.`name`
		, `".DB_PREFIX."product_description`.`product_id`
		FROM
		`".DB_PREFIX."product`
		INNER JOIN `".DB_PREFIX."product_description`
			ON (`".DB_PREFIX."product`.`product_id` = `".DB_PREFIX."product_description`.`product_id`) WHERE model LIKE '".$product_data['product_name']."%' AND `".DB_PREFIX."product_description`.`language_id` = " . $this->config->get('config_language_id') . " LIMIT 5;");
		return $query->rows;
	}
}
?>