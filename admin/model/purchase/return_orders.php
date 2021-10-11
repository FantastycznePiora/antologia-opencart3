<?php
class ModelPurchaseReturnOrders extends Model {
	public function getProducts($order_id)
	{
		$query = $this->db->query("SELECT * FROM ".DB_PREFIX."po_order WHERE id =" . $order_id . " AND delete_bit = " . 1 . " AND receive_bit = " . 1);
		if($query->num_rows > 0)
		{
			//return $query->num_rows;
			$query = $this->db->query("SELECT * FROM ".DB_PREFIX."po_product WHERE order_id = " . $order_id);
			$products = $query->rows;
			return $products;
		}
		else
		{
			return "nothing";
		}
	}
	public function getSuppliers($order_id,$product_id)
	{
		$query = $this->db->query("SELECT
		".DB_PREFIX."po_supplier.first_name
		, ".DB_PREFIX."po_supplier.last_name
		, ".DB_PREFIX."po_supplier.id
		FROM
			".DB_PREFIX."po_receive_details
		INNER JOIN ".DB_PREFIX."po_supplier 
			ON (".DB_PREFIX."po_receive_details.supplier_id = ".DB_PREFIX."po_supplier.id) WHERE order_id = ".$order_id." AND product_id = ".$product_id);
		return $query->rows;
	}
	public function checkQuantity($order_id,$product_id,$supplier_id)
	{
		$query = $this->db->query("SELECT
		quantity - returned_products as quantity
		FROM
			".DB_PREFIX."po_receive_details WHERE order_id =" .$order_id. " AND product_id = ".$product_id." AND supplier_id =". $supplier_id );
		return $query->row;
	}
	
	public function save_return_order($data)
	{
		$query = $this->db->query("SELECT product_id FROM ".DB_PREFIX."po_product WHERE id = " . $data['product'] . " AND order_id = " . $data['order_id']);
		$product_id = $query->row;
		
		$this->db->query("UPDATE ".DB_PREFIX."po_receive_details SET returned_products = " . $data['return_quantity'] . " WHERE product_id=" . $data['product'] . " AND order_id = " . $data['order_id'] . " AND supplier_id = " . $data['supplier']);
		$this->db->query("UPDATE ".DB_PREFIX."product SET quantity = quantity - " . $data['return_quantity'] . " WHERE product_id = " . $product_id['product_id']);
		$this->db->query("INSERT INTO ".DB_PREFIX."po_return (order_id,product_id,supplier_id,return_quantity,reason,return_date,user_id) VALUES(".$data['order_id'].",".$data['product'].",".$data['supplier'].",".$data['return_quantity'].",'". $data['reason'] ."','".date('Y-m-d')."',".$this->session->data['user_id'].")");
		
		return true;
	}
	public function getList()
	{
		$query = $this->db->query("SELECT
		".DB_PREFIX."po_return.id
		, ".DB_PREFIX."po_return.order_id
		, ".DB_PREFIX."po_product.name
		, ".DB_PREFIX."po_supplier.first_name
		, ".DB_PREFIX."po_supplier.last_name
		, ".DB_PREFIX."po_return.return_date
		,".DB_PREFIX."po_return.return_quantity
		,".DB_PREFIX."user.firstname
		,".DB_PREFIX."user.lastname
		FROM
		".DB_PREFIX."po_return
		INNER JOIN ".DB_PREFIX."po_product 
			ON (".DB_PREFIX."po_return.product_id = ".DB_PREFIX."po_product.id)
		INNER JOIN ".DB_PREFIX."user
			ON ".DB_PREFIX."user.user_id = ".DB_PREFIX."po_return.user_id
		INNER JOIN ".DB_PREFIX."po_supplier 
			ON (".DB_PREFIX."po_return.supplier_id = ".DB_PREFIX."po_supplier.id) WHERE ".DB_PREFIX."po_return.delete_bit = " . 0 . " ORDER BY ".DB_PREFIX."po_return.id DESC");
		return $query->rows;
	}
	public function delete($delete_ids)
	{
		for($i=0; $i<count($delete_ids); $i++)
		{
			$query = $this->db->query("UPDATE ".DB_PREFIX."po_return SET delete_bit = 1 WHERE id = " . $delete_ids[$i]);
		}
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function filter($data)
	{
		if($data['start_date'] == '' && $data['end_date'] == '')
		{
			$data['start_date'] = '';
			$data['end_date'] = '';
		}
		else
		{
			if($data['start_date'] != '')
			{
				$data['start_date'] = strtotime($data['start_date']);
				$data['start_date'] = date('Y-m-d',$data['start_date']);
			}
			else
			{
				$data['start_date'] = date('Y-m-d');
			}
			if($data['end_date'] != '')
			{
				$data['end_date'] = strtotime($data['end_date']);
				$data['end_date'] = date('Y-m-d',$data['end_date']);
			}
			else
			{
				$data['end_date'] = date('Y-m-d');
			}
		}
		$query_string = "SELECT
			".DB_PREFIX."po_return.id
			, ".DB_PREFIX."po_return.order_id
			, ".DB_PREFIX."po_product.name
			, ".DB_PREFIX."po_supplier.first_name
			, ".DB_PREFIX."po_supplier.last_name
			, ".DB_PREFIX."po_return.return_date
			,".DB_PREFIX."po_return.return_quantity
			,".DB_PREFIX."user.firstname
			,".DB_PREFIX."user.lastname
			FROM
			".DB_PREFIX."po_return
			INNER JOIN ".DB_PREFIX."po_product 
				ON (".DB_PREFIX."po_return.product_id = ".DB_PREFIX."po_product.id)
			INNER JOIN ".DB_PREFIX."user
				ON ".DB_PREFIX."user.user_id = ".DB_PREFIX."po_return.user_id
			INNER JOIN ".DB_PREFIX."po_supplier 
				ON (".DB_PREFIX."po_return.supplier_id = ".DB_PREFIX."po_supplier.id) WHERE ".DB_PREFIX."po_return.delete_bit = " . 0;
		
		if($data['return_id'] != '')
		{
			$query_string = $query_string . " AND (".DB_PREFIX."po_return.id = ".$data['return_id'].")";
		}
		if($data['order_id'] != '')
		{
			$query_string = $query_string . " AND (".DB_PREFIX."po_return.order_id = ".$data['order_id'].")";
		}
		if($data['product'] != '--product--')
		{
			$query_string = $query_string . " AND (".DB_PREFIX."po_product.name = '".$data['product']."')";
		}
		if($data['supplier'] != '--supplier--')
		{
			$name = explode(' ', $data['supplier']);
			$query_string = $query_string . " AND (".DB_PREFIX."po_supplier.first_name = '".$name[0]."' AND ".DB_PREFIX."po_supplier.last_name = '".$name[1]."')";
		}
		if($data['start_date'] != '' && $data['end_date'] != '')
		{
			$query_string = $query_string . " AND (".DB_PREFIX."po_return.return_date BETWEEN '".$data['start_date']."' AND '".$data['end_date']."')"; 
			
		}
		$sql = " ORDER BY ".DB_PREFIX."po_return.id DESC";
		$query_string = $query_string . $sql;
		
		$query = $this->db->query($query_string);
		return $query->rows;
	}
	public function getReturnOrder($return_order_id)
	{
			$query = $this->db->query("SELECT * FROM ".DB_PREFIX."po_return WHERE id = " . $return_order_id);
			return $query->row;
	}
	
	public function checkUpdateQuantity($order_id,$product_id,$supplier_id)
	{
		$query = $this->db->query("SELECT
		quantity
		FROM
			".DB_PREFIX."po_receive_details WHERE order_id =" .$order_id. " AND product_id = ".$product_id." AND supplier_id =". $supplier_id );
		return $query->row;
	}
	
	public function update_return_order($data)
	{
		$query = $this->db->query("SELECT product_id FROM ".DB_PREFIX."po_product WHERE id = " . $data['product_id'] . " AND order_id = " . $data['order_id']);
		$product_id = $query->row;
		$query = $this->db->query("SELECT returned_products FROM ".DB_PREFIX."po_receive_details WHERE product_id=" . $data['product_id'] . " AND order_id = " . $data['order_id'] . " AND supplier_id = " . $data['supplier']);
		$return_products = $query->row;
		
		$remaining_quantity = $data['return_quantity'] - $return_products['returned_products'];
		$query = $this->db->query("UPDATE ".DB_PREFIX."po_receive_details SET returned_products = " . $data['return_quantity'] . " WHERE product_id=" . $data['product_id'] . " AND order_id = " . $data['order_id'] . " AND supplier_id = " . $data['supplier']);
		if($remaining_quantity > 0)
		{
			$query1 = $this->db->query("UPDATE ".DB_PREFIX."product SET quantity = quantity - " . $remaining_quantity . " WHERE product_id = " . $product_id['product_id']);
		}
		else
		{
			$remaining_quantity = (-1) * $remaining_quantity;
			$query1 = $this->db->query("UPDATE ".DB_PREFIX."product SET quantity = quantity + " . $remaining_quantity . " WHERE product_id = " . $product_id['product_id']);
		}
			
		$query2 = $this->db->query("UPDATE ".DB_PREFIX."po_return SET return_quantity =" .$data['return_quantity']. " WHERE order_id = ".$data['order_id']." AND product_id = ".$data['product_id']." AND supplier_id = ".$data['supplier'] . " AND delete_bit = " . 0);
		$effected = $this->db->countAffected();
		if($query && $query1 && $query2 && $effected > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function getTotalReturnOrders()
	{
		$query = $this->db->query("SELECT COUNT(id) as total FROM ".DB_PREFIX."po_return WHERE delete_bit = " . 0);
		return $query->row['total'];
		
	}
	
	public function getAllSuppliers()
	{
		$query = $this->db->query("SELECT
		first_name
		,last_name
		FROM
		".DB_PREFIX."po_supplier WHERE delete_bit = 0");
		return $query->rows;
	}
}
?>