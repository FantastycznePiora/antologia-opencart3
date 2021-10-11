<?php
class ModelPurchaseStockReport extends Model {
	public function getStockDetails($data = array())
	{
		$sql = "SELECT
		".DB_PREFIX."product.product_id
		, ".DB_PREFIX."product_description.name
		, ".DB_PREFIX."product.quantity
		FROM
			".DB_PREFIX."product
		INNER JOIN ".DB_PREFIX."product_description 
			ON (".DB_PREFIX."product.product_id = ".DB_PREFIX."product_description.product_id) WHERE ".DB_PREFIX."product_description.language_id = " . $this->config->get('config_language_id');
		
		if (!isset($this->request->get['export'])) {
			$sql = $sql . " LIMIT ".$data['start'].",".$data['limit'];
		}
		
		$query = $this->db->query($sql);
		
		return $query->rows;
	}
	
	public function getTotalStock()
	{
		$query = $this->db->query("SELECT
		COUNT(".DB_PREFIX."product.product_id) AS total
		FROM
			".DB_PREFIX."product
		INNER JOIN ".DB_PREFIX."product_description 
			ON (".DB_PREFIX."product.product_id = ".DB_PREFIX."product_description.product_id) WHERE ".DB_PREFIX."product_description.language_id = ".$this->config->get('config_language_id'));
		
		return $query->row['total'];
	}
	
	public function getInoutDetails($data = array())
	{
		$limit = "SELECT DISTINCT product_id FROM inout_details WHERE 1=1";
		
		$sql = "SELECT * FROM inout_details WHERE 1=1";
		
		if(empty($data['date_start']) && empty($data['date_end'])){
			//do nothing
		}
		else{
			//startdate manipulation
			if(!empty($data['date_start'])){
				$data['date_start'] = strtotime($data['date_start']);
				$data['date_start'] = date('Y-m-d',$data['date_start']);
			}
			else{
				$data['date_start'] = date('Y-m-d');
			}
				
			//enddate manipulation
			if(!empty($data['date_end'])){
				$data['date_end'] = strtotime($data['date_end']);
				$data['date_end'] = date('Y-m-d',$data['date_end']);
			}
			else{
				$data['date_end'] = date('Y-m-d');
			}
		}
		
		if(!empty($data['product'])){
			$sql = $sql . " AND inout_details.name = '" .$data['product']."'";
			$limit = $limit . " AND inout_details.name = '" .$data['product']."'";
		}
		
		if(!empty($data['date_start']) && !empty($data['date_end'])){
			$sql = $sql . " AND (order_date BETWEEN '".$data['date_start']." 00:00:00' AND '".$data['date_end']." 23:59:59')";
			$limit = $limit . " AND (order_date BETWEEN '".$data['date_start']."' AND '".$data['date_end']."')";
		}
		
		$limit = $limit . " LIMIT " . $data['start'] . "," . $data['limit'];
		$limit = $this->db->query($limit);
		$limit = array_map('current', $limit->rows);
		$limit = implode(',',$limit);
		
		//if export bit is not set
		if(!isset($this->request->get['export'])){
            if (!empty($limit)) {
                $sql = $sql . " AND product_id IN(".$limit.")";
            }

		}
		
		$query = $this->db->query($sql);
		
		$products = array();
		
		foreach ($query->rows as $product) {
			$products[$product['product_id']]['product_id'] = $product['product_id'];
			$products[$product['product_id']]['name'] = $product['name'];
			
			if ($product['table_name']=='sale_table') {
				$products[$product['product_id']]['squantities'][] = $product['quantity'];
			}
			
			if ($product['table_name'] == 'purchase_table') {
				$products[$product['product_id']]['pquantities'][] = $product['quantity'];
			}
		}
		foreach ($products as $product) {
			if (isset($product['squantities'])) {
				$products[$product['product_id']]['squantities'] = array_sum($product['squantities']);
			}
			
			if(isset($product['pquantities'])) {
				$products[$product['product_id']]['pquantities'] = array_sum($product['pquantities']);
			}
		}
		
		return $products;
	}
	
	function getTotalInout($data = array())
	{
		$sql = "SELECT COUNT(DISTINCT product_id) AS total FROM inout_details WHERE 1=1";
		
		if(empty($data['date_start']) && empty($data['date_end'])){
			//do nothing
		}
		else{
			//startdate manipulation
			if(!empty($data['date_start'])){
				$data['date_start'] = strtotime($data['date_start']);
				$data['date_start'] = date('Y-m-d',$data['date_start']);
			}
			else{
				$data['date_start'] = date('Y-m-d');
			}
				
			//enddate manipulation
			if(!empty($data['date_end'])){
				$data['date_end'] = strtotime($data['date_end']);
				$data['date_end'] = date('Y-m-d',$data['date_end']);
			}
			else{
				$data['date_end'] = date('Y-m-d');
			}
		}
		
		if(!empty($data['product'])){
			$sql = $sql . " AND inout_details.name = '" .$data['product']."'";
		}
		
		if(!empty($data['date_start']) && !empty($data['date_end'])){
			$sql = $sql . " AND (order_date BETWEEN '".$data['date_start']." 00:00:00' AND '".$data['date_end']." 23:59:59')";
		}
		
		$query = $this->db->query($sql);
		return $query->row['total'];
	}
	public function view_inout_details($detail)
	{
		$sale_products = array();
		$purchase_products = array();
		if($detail['date_start'] != '')
		{
			$detail['date_start'] = strtotime($detail['date_start']);
			$detail['date_start'] = date('Y-m-d',$detail['date_start']);
		}
		if($detail['date_end'] != '')
		{
			$detail['date_end'] = strtotime($detail['date_end']);
			$detail['date_end'] = date('Y-m-d',$detail['date_end']);
		}
		
		$common_query1 = "SELECT
			".DB_PREFIX."order_product.product_id
			, ".DB_PREFIX."order_product.name
			, ".DB_PREFIX."order_product.quantity
			, ".DB_PREFIX."order.date_modified
			FROM
				".DB_PREFIX."order
			INNER JOIN ".DB_PREFIX."order_product 
				ON (".DB_PREFIX."order.order_id = ".DB_PREFIX."order_product.order_id) WHERE ".DB_PREFIX."order.order_status_id = 5 AND ".DB_PREFIX."order_product.product_id = ".$detail['product_id'];
		
		$common_query2 = "SELECT
				".DB_PREFIX."po_product.product_id
				, ".DB_PREFIX."po_product.name
				, ".DB_PREFIX."po_product.received_products as quantity
				, ".DB_PREFIX."po_order.receive_date
				FROM
					".DB_PREFIX."po_order
				INNER JOIN ".DB_PREFIX."po_product 
					ON (".DB_PREFIX."po_order.id = ".DB_PREFIX."po_product.order_id) WHERE ".DB_PREFIX."po_order.receive_bit = 1 AND delete_bit=1 AND ".DB_PREFIX."po_product.product_id = ".$detail['product_id'];
		if(($detail['date_start'] != '') && ($detail['date_end'] != '') && ($detail['product'] != '--product--'))
		{
			if($detail['report_bit'] == 1)
			{
				$query_string1 = $common_query1 . " AND ".DB_PREFIX."order.date_modified BETWEEN '".$detail['date_start']." 00:00:00.00' AND '".$detail['date_end']." 23:59:59.999' AND ".DB_PREFIX."order_product.name = '".$detail['product']."';";
				
				$query1 = $this->db->query($query_string1);
				
				$sale_products = $query1->rows;
				
				$query_string2 = $common_query2 . " AND ".DB_PREFIX."po_order.receive_date BETWEEN '".$detail['date_start']."' AND '".$detail['date_end']."' AND ".DB_PREFIX."po_product.name = '".$detail['product']."';";
				
				$query2 = $this->db->query($query_string2);
				
				$purchase_products = $query2->rows;
			}
			elseif($detail['report_bit'] == 2)
			{
				$query_string2 = $common_query2 . " AND ".DB_PREFIX."po_order.receive_date BETWEEN '".$detail['date_start']."' AND '".$detail['date_end']."' AND ".DB_PREFIX."po_product.name = '".$detail['product']."';";
				
				$query2 = $this->db->query($query_string2);
				
				$purchase_products = $query2->rows;
			}
			elseif($detail['report_bit'] == 3)
			{
				$query_string1 = $common_query1 . " AND ".DB_PREFIX."order.date_modified BETWEEN '".$detail['date_start']." 00:00:00.00' AND '".$detail['date_end']." 23:59:59.999' AND ".DB_PREFIX."order_product.name = '".$detail['product']."';";
				
				$query1 = $this->db->query($query_string1);
				
				$sale_products = $query1->rows;
			}
		
		}
		elseif(($detail['date_start'] != '') && ($detail['date_end'] != ''))
		{
			if($detail['report_bit'] == 1)
			{
				$query_string1 = $common_query1 . " AND ".DB_PREFIX."order.date_modified BETWEEN '".$detail['date_start']." 00:00:00.00' AND '".$detail['date_end']." 23:59:59.999';";
				
				$query1 = $this->db->query($query_string1);
				
				$sale_products = $query1->rows;
				
				$query_string2 = $common_query2 . " AND ".DB_PREFIX."po_order.receive_date BETWEEN '".$detail['date_start']."' AND '".$detail['date_end']."';";
				
				$query2 = $this->db->query($query_string2);
				
				$purchase_products = $query2->rows;
			}
			elseif($detail['report_bit'] == 2)
			{
				$query_string2 = $common_query2 . " AND ".DB_PREFIX."po_order.receive_date BETWEEN '".$detail['date_start']."' AND '".$detail['date_end']."';";
				
				$query2 = $this->db->query($query_string2);
				
				$purchase_products = $query2->rows;
			}
			elseif($detail['report_bit'] == 3)
			{
				$query_string1 = $common_query1 . " AND ".DB_PREFIX."order.date_modified BETWEEN '".$detail['date_start']." 00:00:00.00' AND '".$detail['date_end']." 23:59:59.999';";
				
				$query1 = $this->db->query($query_string1);
				
				$sale_products = $query1->rows;
			}
		}
		elseif($detail['product'] != '--product--')
		{
			if($detail['report_bit'] == 1)
			{
				$query_string1 = $common_query1 . " AND ".DB_PREFIX."order_product.name = '".$detail['product']."';";
				
				$query1 = $this->db->query($query_string1);
				
				$sale_products = $query1->rows;
				
				$query_string2 = $common_query2 . " AND ".DB_PREFIX."po_product.name = '".$detail['product']."';";
				
				$query2 = $this->db->query($query_string2);
				
				$purchase_products = $query2->rows;
			}
			elseif($detail['report_bit'] == 2)
			{
				$query_string2 = $common_query2 . " AND ".DB_PREFIX."po_product.name = '".$detail['product']."';";
				
				$query2 = $this->db->query($query_string2);
				
				$purchase_products = $query2->rows;
			}
			elseif($detail['report_bit'] == 3)
			{
				$query_string1 = $common_query1 . " AND ".DB_PREFIX."order_product.name = '".$detail['product']."';";
				
				$query1 = $this->db->query($query_string1);
				
				$sale_products = $query1->rows;
			}
			
		}
		else
		{
			if($detail['report_bit'] == 1)
			{
				$query1 = $this->db->query($common_query1);
				
				$sale_products = $query1->rows;
				
				$query2 = $this->db->query($common_query2);
				
				$purchase_products = $query2->rows;
			}
			elseif($detail['report_bit'] == 2)
			{
				$query2 = $this->db->query($common_query2);
				
				$purchase_products = $query2->rows;
			}
			if($detail['report_bit'] == 3)
			{
				$query1 = $this->db->query($common_query1);
				
				$sale_products = $query1->rows;
			}
		}
		
		
		
		for($i=0; $i<count($sale_products); $i++)
		{
			$sale_products[$i]['date_modified'] = strstr($sale_products[$i]['date_modified'], ' ', true);
		}
		
		if((count($sale_products) > 0) && (count($purchase_products) > 0))
		{
			for($i=0;$i<count($sale_products); $i++)
			{
				for($j=0; $j<count($purchase_products); $j++)
				{
					if($sale_products[$i]['date_modified'] == $purchase_products[$j]['receive_date'])
					{
						$sale_products[$i]['purchase_quantity'] = $purchase_products[$j]['quantity'];
						unset($purchase_products[$j]);
						$purchase_products = array_values(array_filter($purchase_products));
					}
				}
			}
			
			$data['sale_products'] = $sale_products;
			$data['purchase_products'] = $purchase_products;	
			return $data;
		}
		elseif((count($sale_products) > 0))
		{
			$data['sale_products'] = $sale_products;	
			return $data;
		}if((count($purchase_products) > 0))
		{
			$data['purchase_products'] = $purchase_products;	
			return $data;
		}
	}
	
	public function getDeadProducts($filter = array())
	{
		//getting all products
		$this->load->model('catalog/product');
		$products = array();
		$products = $this->model_catalog_product->getProducts($products);
		$i = 0;
		foreach($products as $product)
		{
			$data[$i]['name'] = $product['name'];
			$data[$i]['product_id'] = $product['product_id'];
			$data[$i]['sales_quantity'] = 0;
			$i++;
		}
		$all_products = $data;
		
		//getting sold products
		
		if(count(array_filter($filter)) > 0)
		{
			if($filter['date_start'] != '')
			{
				$filter['date_start'] = strtotime($filter['date_start']);
				$filter['date_start'] = date('Y-m-d',$filter['date_start']);
			}
			if($filter['date_end'] != '')
			{
				$filter['date_end'] = strtotime($filter['date_end']);
				$filter['date_end'] = date('Y-m-d',$filter['date_end']);
			}
			
			if(($filter['date_start'] != '') && ($filter['date_end'] == ''))
			{
				$filter['date_end'] = date('Y-m-d');
			}
			
			$query = $this->db->query("SELECT
			".DB_PREFIX."order_product.product_id
			, ".DB_PREFIX."order_product.name
			, ".DB_PREFIX."order_product.quantity
			FROM
				".DB_PREFIX."order
			INNER JOIN ".DB_PREFIX."order_product 
				ON (".DB_PREFIX."order.order_id = ".DB_PREFIX."order_product.order_id) WHERE ".DB_PREFIX."order.order_status_id = 5  AND ".DB_PREFIX."order.date_modified BETWEEN '".$filter['date_start']." 00:00:00.00' AND '".$filter['date_end']." 23:59:59.999'");
			
			$sold_products = $query->rows;
		}
		else
		{
			$query = $this->db->query("SELECT
			".DB_PREFIX."order_product.product_id
			, ".DB_PREFIX."order_product.name
			, ".DB_PREFIX."order_product.quantity
			FROM
				".DB_PREFIX."order
			INNER JOIN ".DB_PREFIX."order_product 
				ON (".DB_PREFIX."order.order_id = ".DB_PREFIX."order_product.order_id) WHERE ".DB_PREFIX."order.order_status_id = 5");
				
			$sold_products = $query->rows;
		}
		
		/*For counting total quantity of sold products, individual products*/
		$quantity = 0;
		
		for($i=0;$i<count($sold_products); $i++)
		{
			if($sold_products[$i] != '')
			{
				$quantity = $quantity + $sold_products[$i]['quantity'];
				for($j=0; $j<count($sold_products); $j++)
				{
					if(($sold_products[$i]['product_id'] == $sold_products[$j]['product_id']) && ($i != $j))
					{
						$quantity = $quantity + $sold_products[$j]['quantity'];
						unset($sold_products[$j]);
					}
				}
				$sold_products[$i]['sales_quantity'] = $quantity;
				$sold_products = array_values(array_filter($sold_products));
				$quantity = 0;
			}
		}
		/*For counting total quantity of sold products, individual products*/
		
		/*to remove the quantity index from sold products*/
		for($i = 0; $i<count($sold_products); $i++)
		{
			unset($sold_products[$i]['quantity']);
		}
		/*to remove the quantity index from sold products*/
		
		/*to merge the all products and sold products*/
		for($i = 0; $i<count($sold_products); $i++)
		{
			for($j =0; $j<count($all_products); $j++)
			{
				if($sold_products[$i]['product_id'] == $all_products[$j]['product_id'])
				{
					unset($all_products[$j]);
					break;
				}
			}
			$all_products = array_values(array_filter($all_products));
		}
		/*to merge the all products and sold products*/
		$data = array_merge($sold_products,$all_products);
		/*For getting the stock*/
		$query = $this->db->query("SELECT
		".DB_PREFIX."product.product_id
		, ".DB_PREFIX."product_description.name
		, ".DB_PREFIX."product.quantity
		FROM
			".DB_PREFIX."product
		INNER JOIN ".DB_PREFIX."product_description 
			ON (".DB_PREFIX."product.product_id = ".DB_PREFIX."product_description.product_id)");
		$stock = $query->rows;
		
		for($i = 0; $i < count($data); $i++)
		{
			for($j = 0; $j < count($stock); $j++)
			{
				if($data[$i]['product_id'] == $stock[$j]['product_id'])
				{
					$data[$i]['quantity'] = $stock[$j]['quantity'];
					unset($stock[$j]);
					break;
				}
			}
			$stock = array_values(array_filter($stock));
		}
		
		/*for getting the stock*/
		
		return $data;
	}
	
	public function best_products($filter = array())
	{
		if(count(array_filter($filter)) > 0)
		{
			if($filter['date_start'] != '')
			{
				$filter['date_start'] = strtotime($filter['date_start']);
				$filter['date_start'] = date('Y-m-d',$filter['date_start']);
			}
			if($filter['date_end'] != '')
			{
				$filter['date_end'] = strtotime($filter['date_end']);
				$filter['date_end'] = date('Y-m-d',$filter['date_end']);
			}
			
			if(($filter['date_start'] != '') && ($filter['date_end'] == ''))
			{
				$filter['date_end'] = date('Y-m-d');
			}
			
			$query = $this->db->query("SELECT
			".DB_PREFIX."order_product.product_id
			, ".DB_PREFIX."order_product.name
			, ".DB_PREFIX."order_product.quantity
			FROM
				".DB_PREFIX."order
			INNER JOIN ".DB_PREFIX."order_product 
				ON (".DB_PREFIX."order.order_id = ".DB_PREFIX."order_product.order_id) WHERE ".DB_PREFIX."order.order_status_id = 5  AND ".DB_PREFIX."order.date_modified BETWEEN '".$filter['date_start']." 00:00:00.00' AND '".$filter['date_end']." 23:59:59.999'");
			
			$sold_products = $query->rows;
		}
		else
		{
			$query = $this->db->query("SELECT
			".DB_PREFIX."order_product.product_id
			, ".DB_PREFIX."order_product.name
			, ".DB_PREFIX."order_product.quantity
			FROM
				".DB_PREFIX."order
			INNER JOIN ".DB_PREFIX."order_product 
				ON (".DB_PREFIX."order.order_id = ".DB_PREFIX."order_product.order_id) WHERE ".DB_PREFIX."order.order_status_id = 5");
				
			$sold_products = $query->rows;
		}
		
		/*For counting total quantity of sold products, individual products*/
		$quantity = 0;
		
		for($i=0;$i<count($sold_products); $i++)
		{
			if($sold_products[$i] != '')
			{
				$quantity = $quantity + $sold_products[$i]['quantity'];
				for($j=0; $j<count($sold_products); $j++)
				{
					if(($sold_products[$i]['product_id'] == $sold_products[$j]['product_id']) && ($i != $j))
					{
						$quantity = $quantity + $sold_products[$j]['quantity'];
						unset($sold_products[$j]);
					}
				}
				$sold_products[$i]['sales_quantity'] = $quantity;
				$sold_products = array_values(array_filter($sold_products));
				$quantity = 0;
			}
		}
		/*For counting total quantity of sold products, individual products*/
		
		/*to remove the quantity index from sold products*/
		for($i = 0; $i<count($sold_products); $i++)
		{
			unset($sold_products[$i]['quantity']);
		}
		/*to remove the quantity index from sold products*/
		
		$query = $this->db->query("SELECT
		".DB_PREFIX."product.product_id
		, ".DB_PREFIX."product_description.name
		, ".DB_PREFIX."product.quantity
		FROM
			".DB_PREFIX."product
		INNER JOIN ".DB_PREFIX."product_description 
			ON (".DB_PREFIX."product.product_id = ".DB_PREFIX."product_description.product_id)");
		$stock = $query->rows;
		
		for($i = 0; $i < count($sold_products); $i++)
		{
			for($j = 0; $j < count($stock); $j++)
			{
				if($sold_products[$i]['product_id'] == $stock[$j]['product_id'])
				{
					$sold_products[$i]['quantity'] = $stock[$j]['quantity'];
					unset($stock[$j]);
					break;
				}
			}
			$stock = array_values(array_filter($stock));
		}
		
		return $sold_products;
	}
}
?>