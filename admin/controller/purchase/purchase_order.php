<?php
class ControllerPurchasePurchaseOrder extends Controller{
	public function index()
	{
		$this->load->language('purchase/purchase_order');
		$this->document->setTitle($this->language->get('title'));
		
		//languages
		
		//headings
		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_list'] = $this->language->get('text_list');
		
		//fields
		$data['field_order_id'] = $this->language->get('field_order_id');
		$data['field_status'] = $this->language->get('field_status');
		$data['field_from'] = $this->language->get('field_from');
		$data['field_to'] = $this->language->get('field_to');
		
		//columns
		$data['column_order_id'] = $this->language->get('column_order_id');
		$data['column_date'] = $this->language->get('column_date');
		$data['column_order_by'] = $this->language->get('column_order_by');
		$data['column_supplier'] = $this->language->get('column_supplier');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_action'] = $this->language->get('column_action');
		
		//buttons
		$data['button_filter'] = $this->language->get('button_filter');
		$data['button_clear'] = $this->language->get('button_clear');
		
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
			
		$url = '';

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);
			
		$data['breadcrumbs'][] = array(
			'text' => $data['heading_title'],
			'href' => $this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true)
		);

		$data['add'] = $this->url->link('purchase/purchase_order/add', 'token=' . $this->session->data['token'] . $url, true);
		$data['delete'] = $this->url->link('purchase/purchase_order/delete', 'token=' . $this->session->data['token'] . $url, true);
		$data['filter'] = $this->url->link('purchase/purchase_order/filter', 'token=' . $this->session->data['token'] . $url, true);
		
		/*getting the list of the orders*/
		
		$this->load->model('purchase/purchase_order');
		
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		
		$start = ($page-1)*20;
		$limit = 20;
		
		$data['order_list'] = $this->model_purchase_purchase_order->getList($start,$limit);
		/*getting the list of the orders*/
		
		//getting total orders
		
		$total_orders = $this->model_purchase_purchase_order->getTotalOrders();
		
		//getting total orders
		$data['view'] = $this->url->link('purchase/purchase_order/view_order_details', 'token=' . $this->session->data['token'] . $url, true);
		$data['receive'] = $this->url->link('purchase/purchase_order/receive_order', 'token=' . $this->session->data['token'] . $url, true);
		//getting pages

		
		//getting pages
		
		/*pagination*/
		$pagination = new Pagination();
		$pagination->total = $total_orders;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);
		
		$data['pagination'] = $pagination->render();
		
		$data['results'] = sprintf($this->language->get('text_pagination'), ($total_orders) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($total_orders - $this->config->get('config_limit_admin'))) ? $total_orders : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $total_orders, ceil($total_orders / $this->config->get('config_limit_admin')));

		
		/*pagination*/
		$data['my_custom_text'] = "This is purchase order page.";
		$this->response->setOutput($this->load->view('purchase/purchase_order_list.tpl', $data));
	}
	
	public function add()
	{
		$this->load->language('purchase/purchase_order');
		
		$this->document->setTitle($this->language->get('title'));
		
		//languages
		
		//headings
		$data['heading_title'] = $this->language->get('heading_title');
		$data['form_caption'] = $this->language->get('form_caption');
		
		//text
		$data['supplier_text'] = $this->language->get('supplier_text');
		$data['product_text'] = $this->language->get('product_text');
		$data['quantity_text'] = $this->language->get('quantity_text');
		$data['option_text'] = $this->language->get('option_text');
		$data['option_value_text'] = $this->language->get('option_value_text');
		$data['add_text'] = $this->language->get('add_text');
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['breadcrumbs'] = array();
		$data['token'] = $this->session->data['token'];
		$url = '';

			
		$data['action'] = $this->url->link('purchase/purchase_order/insert_purchase_order', 'token=' . $this->session->data['token'] . $url, true);
		$data['cancel'] = $this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);
			
		$data['breadcrumbs'][] = array(
			'text' => $data['heading_title'],
			'href' => $this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true)
		);
		/*For loading the products from database*/
		$this->load->model('catalog/product');
		$products = $this->model_catalog_product->getProducts(array());
		$data['all_products'] = array();
		$i = 0;
		foreach($products as $product)
		{
			$data['all_products'][$i]['name'] = $product['name'];
			$data['all_products'][$i]['product_id'] = $product['product_id'];
			$i++;
		}
		
		/*For getting the products from database*/
		
		//for loading the attribute groups
		
		$this->load->model('catalog/attribute_group');
		$attribute_groups = $this->model_catalog_attribute_group->getAttributeGroups();
		$data['attribute_groups'] = $attribute_groups;
		$data['form_bit'] = 1;
		//for loading the attribute groups
		
		/*getting the product options from database*/
		
		$this->load->model('catalog/option');
		$data['all_options'] = $this->model_catalog_option->getOptions();
		
		/*getting the product options from database*/
		$this->load->model('purchase/supplier');
		$data['suppliers'] = $this->model_purchase_supplier->get_total_suppliers();
		$this->response->setOutput($this->load->view('purchase/purchase_order_form.tpl', $data));
	}
	
	/*--------------------load attributes function starts here---------------------*/
	
	/*---------------------Delete Function starts here-----------------------------*/
	
	public function delete()
	{
		$url = '';
		$ids = $this->request->post['selected'];
		$this->load->model('purchase/purchase_order');
		$deleted = $this->model_purchase_purchase_order->delete($ids);
		if($deleted)
		{
			$_SESSION['delete_success_message'] = "The order successfully deleted";
			$this->response->redirect($this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true));
		}
		else
		{
			$_SESSION['delete_unsuccess_message'] = "Sorry!! something went wrong";
			$this->response->redirect($this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true));
		}
	}
	
	/*---------------------Delete Function ends here-----------------------------*/
	
	public function loadAttributes()
	{
		$product_id = $_GET['product_id'];
		$this->load->model('catalog/product');

		$attributes = $this->model_catalog_product->getProductAttributes($product_id);
		$attribute_ids = array();
		$i=0;
		foreach($attributes as $attribute)
		{
			$attributes[$i] = $attribute['product_attribute_description'][1]['text'];
			$attribute_ids[$i] = $attribute['attribute_id'];
			$i++;
		}
		$data['attributes'] = $attributes;
		$data['attribute_ids'] = $attribute_ids;
		if($attributes)
		{
			echo json_encode($data);
		}
		else
		{
			echo "0";
		}
		
	}
	
	/*--------------------load attributes function ends here-----------------------*/
	
	////////////////////////////////////////////////////////////////////////////////////
	
	/*-------------------Loading the related attributes under specific attribute group----------*/
	
	public function getRelatedAttributes()
	{
		$this->load->model('catalog/attribute');
		$attributes = $this->model_catalog_attribute->getAttributes(array('filter_attribute_group_id' => $_GET['attribute_group_id']));
		$attribute_ids = array();
		$i = 0;
		foreach($attributes as $attribute)
		{
			$attributes[$i] = $attribute['name'];
			$attribute_ids[$i] = $attribute['attribute_id'];
			$i++;
		}
		$data['attributes'] = $attributes;
		$data['attribute_ids'] = $attribute_ids;
		if($attributes)
		{
			echo json_encode($data);
		}
		else
		{
			echo "0";
		}
	}
	
	/*-------------------Loading the related attributes under specific attribute group----------*/
	
	//////////////////////////////////////////////////////////////////////////////////////////////
	
	/*------------------------loading related option values funcstion starts here--------------*/
	
	public function getRelatedOptionValues()
	{
		$option = explode('_',$_GET['option_id']);
		$option_id = $option[0];
		//echo $option_id;
		$this->load->model('catalog/option');
		$option_values = $this->model_catalog_option->getOptionValues($option_id);
		$option_value_ids = array();
		//print_r($option_values);
		$i = 0;
		foreach($option_values as $option_value)
		{
			$option_values[$i] = $option_value['name'];
			$option_value_ids[$i] = $option_value['option_value_id'];
			$i++;
		}
		$data['option_values'] = $option_values;
		$data['option_value_ids'] = $option_value_ids;
		if($option_values)
		{
			echo json_encode($data);
		}
		else
		{
			echo "0";
		}
		
	}
	
	/*------------------------loading related option values function ends here-----------------*/
	
	/*--------------------Insert Purchase Order starts heres-------------------------------------------------*/
	
	public function insert_purchase_order()
	{
		$this->load->language('purchase/purchase_order');
		$data['heading_title'] = $this->language->get('heading_title');
		$data['form_caption'] = $this->language->get('form_caption');
		
		//text
		$data['supplier_text'] = $this->language->get('supplier_text');
		$data['product_text'] = $this->language->get('product_text');
		$data['quantity_text'] = $this->language->get('quantity_text');
		$data['option_text'] = $this->language->get('option_text');
		$data['option_value_text'] = $this->language->get('option_value_text');
		$data['add_text'] = $this->language->get('add_text');
		
		$url = '';
		$data['products'] = $_POST['product'];
		$data['supplier_id'] = $_POST['supplier_id'];
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['breadcrumbs'] = array();
		$data['token'] = $this->session->data['token'];
		
		$error = false;
		foreach($data['products'] as $product)
		{
			if(!isset($product['id_name']) || empty($product['name']) || empty($product['quantity']) || !is_numeric($product['quantity']))
			{
				$error = true;
				break;
			}
		}
		$data['products'] = array_values($data['products']);
		if($error)
		{
			$this->load->model('catalog/option');
			//error messages
			$_SESSION['errors'] = "Warning: Please check the form carefully for errors!";
			$_SESSION['quantity_error'] = "Quantity should be numeric";
			$_SESSION['manual_product_error'] = "Manual product is not allowed";
			$_SESSION['required'] = "Product and quantity fields are required";
			/*------------Working with data received starts-----*/
			
			for($i =0; $i<count($data['products']); $i++)
			{
				if (!isset($data['products'][$i]['id_name'])) {
					$data['products'][$i]['id_name'] = null;
				}
				
				if(strrchr($data['products'][$i]['id_name'],"_"))
				{
					$id_name = explode('_',$data['products'][$i]['id_name']);
					$data['products'][$i]['id'] = $id_name[0];
					$data['products'][$i]['name'] = $id_name[1];
				}else{
					$data['products'][$i]['id'] = '';
					$data['products'][$i]['name'] = '';
				}
				
				for($j=0; $j<count($data['products'][$i]['options']); $j++)
				{
					if (strrchr($data['products'][$i]['options'][$j],"_")) {
						$option_id = explode('_',$data['products'][$i]['options'][$j]);
						$data['products'][$i]['options'][$j] = $option_id[0];
						$values = $this->model_catalog_option->getOptionValues($data['products'][$i]['options'][$j]);
						$data['products'][$i]['all_options_values'][] = $this->model_catalog_option->getOptionValues($data['products'][$i]['options'][$j]);
					}else {
						$data['products'][$i]['all_options_values'][] = null;
					}
					if (strrchr($data['products'][$i]['option_values'][$j],"_")) {
						$option_value_id = explode('_',$data['products'][$i]['option_values'][$j]);
						$data['products'][$i]['option_values'][$j] = $option_value_id[0];
					}else {
						$data['products'][$i]['option_values'][$j] = null;
					}
				}
			}
			//products
			$this->load->model('catalog/product');
			$products = $this->model_catalog_product->getProducts(array());
			$data['all_products'] = array();
			$i = 0;
			foreach($products as $product)
			{
				$data['all_products'][$i]['name'] = $product['name'];
				$data['all_products'][$i]['product_id'] = $product['product_id'];
				$i++;
			}
			$data['error_bit'] = 1;
			//options
			$this->load->model('catalog/option');
			$data['all_options'] = $this->model_catalog_option->getOptions();
			
			$data['action'] = $this->url->link('purchase/purchase_order/insert_purchase_order', 'token=' . $this->session->data['token'] . $url, true);
			$data['cancel'] = $this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true);
			$this->load->model('purchase/supplier');
			$data['suppliers'] = $this->model_purchase_supplier->get_total_suppliers();
		
			$this->load->model('catalog/option');
			$data['options'] = $this->model_catalog_option->getOptions();
			$this->response->setOutput($this->load->view('purchase/purchase_order_form.tpl', $data));
		}
		else
		{
			$this->load->model('purchase/purchase_order');
			$order_id = $this->model_purchase_purchase_order->insert_purchase_order($_POST);
			
			if(isset($this->request->post['mail_bit'])){
				
				$this->load->model('purchase/purchase_order');
				$data['order'] = $this->model_purchase_purchase_order->view_order_details($order_id);
				$total = 0;
				
				foreach($data['order']['products'] as $product_id => $product){
					
					$data['order']['products'][$product_id]['supplier_ids'] = array_values($product['supplier_ids']);
					$data['order']['products'][$product_id]['receive_quantities'] = array_values($product['receive_quantities']);
					$data['order']['products'][$product_id]['prices'] = array_values($product['prices']);
					
					$total = $total + array_sum($product['total_sprice']);
					$data['order']['order_info']['total'] = ($total>0) ? $total : '';
					
					//calculating remaining quantity
					$rq = $product['quantity'] - array_sum($product['receive_quantities']);
					$data['order']['products'][$product_id]['rq'] = ($rq > 0) ? $rq : '';
				}
				
				$data['company_name'] = $this->config->get('config_name'); // store name
				$data['company_title'] = $this->config->get('config_title'); // store title
				$data['company_owner'] = $this->config->get('config_owner'); // store owner name
				$data['company_email'] = $this->config->get('config_email'); // store email
				$data['company_address'] = $this->config->get('config_address');//store address
				
				//generating pdf to send
				$html = $this->load->view('purchase/mail_purchase_order.tpl',$data);
				$base_url = HTTP_CATALOG;
				$mpdf = new mPDF('c','A4','','' , 5 , 5 , 25 , 10 , 5 , 7); 
				$header = '<div class="header"><div class="logo"><img src="'.$base_url.'image/catalog/logo.png" /></div><div class="company"><h3>'.$data['company_name'].'</h3></div></div><hr />';
				$mpdf->SetHTMLHeader($header, 'O', false);
				$footer = '<div class="footer"><div class="address"><b>Adress: </b>'.$data['company_address'].'</div><div class="pageno">{PAGENO}</div></div>';
				$mpdf->SetHTMLFooter($footer);
				$mpdf->SetDisplayMode('fullpage');
				$mpdf->list_indent_first_level = 0;
				$mpdf->WriteHTML($html);
				$mpdf->Output('../orders/order.pdf','F');
				
				//to get the email of supplier
				$query = $this->db->query('SELECT email FROM oc_po_supplier WHERE id = ' .$data['supplier_id']);
				
				$email_address = $query->row['email'];
				
				$file_to_attach = '../orders/order.pdf';
				
				//mailing
				$mail = new Mail();
				$mail->protocol = $this->config->get('config_mail_protocol');
				$mail->parameter = $this->config->get('config_mail_parameter');
				$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
				$mail->smtp_username = $this->config->get('config_mail_smtp_username');
				$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
				$mail->smtp_port = $this->config->get('config_mail_smtp_port');
				$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

				$mail->setTo($email_address);
				$mail->setFrom($this->config->get('config_email'));
				$mail->setSender(html_entity_decode($data['company_name'], ENT_QUOTES, 'UTF-8'));
				$mail->setSubject(html_entity_decode(sprintf("New order", $data['company_name']), ENT_QUOTES, 'UTF-8'));
				$mail->setText("New order");
				$mail->addAttachment($file_to_attach);
				$mail->send();
			}
			
			if($order_id){
				
				$_SESSION['success_order_message'] = "The Order has been added";
				$this->response->redirect($this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true));
			}
		}
	}
	
	/*--------------------Insert purchase order ends here----------------------------*/
	
	///////////////////////////////////////////////////////////////////////////////////
	
	/*----------------------------view_order_details function starts here------------*/
	
	public function view_order_details()
	{
		$this->load->language('purchase/purchase_order');
		$this->document->setTitle($this->language->get('title'));
		
		//caption
		$data['order_by_caption'] = $this->language->get('order_by_caption');
		$data['purchase_order_date_caption'] = $this->language->get('purchase_order_date_caption');
		$data['receive_on_text'] = $this->language->get('receive_on_text');
		
		//columns
		$data['column_product_name'] = $this->language->get('column_product_name');
		$data['column_option_value'] = $this->language->get('column_option_value');
		$data['column_demand'] = $this->language->get('column_demand');
		$data['column_receive_quantity'] = $this->language->get('column_receive_quantity');
		$data['column_remaining_quantity'] = $this->language->get('column_remaining_quantity');
		$data['column_supplier'] = $this->language->get('column_supplier');
		$data['column_from_supplier'] = $this->language->get('column_from_supplier');
		$data['column_price'] = $this->language->get('column_price');
		$data['column_tprice'] = $this->language->get('column_tprice');
		$data['column_grand_total'] = $this->language->get('column_grand_total');
		
		
		$order_id = $this->request->get['order_id'];
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		$url = '';
			
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => "Home",
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);
			
			$data['breadcrumbs'][] = array(
			'text' => "Purchase Orders",
			'href' => $this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true)
		);
		
		$this->load->model('purchase/purchase_order');
		$data['order'] = $this->model_purchase_purchase_order->view_order_details($order_id);
		$total = 0;
		foreach($data['order']['products'] as $product_id => $product)
		{
			$data['order']['products'][$product_id]['supplier_ids'] = array_values($product['supplier_ids']);
			$data['order']['products'][$product_id]['receive_quantities'] = array_values($product['receive_quantities']);
			$data['order']['products'][$product_id]['received_products'] = array_sum(array_values($product['receive_quantities']));
			$data['order']['products'][$product_id]['prices'] = array_values($product['prices']);
			
			$total = $total + array_sum($product['total_sprice']);
			$data['order']['order_info']['total'] = ($total>0) ? round($total,2) : '';
			
			//calculating remaining quantity
			$rq = $product['quantity'] - array_sum($product['receive_quantities']);
			$data['order']['products'][$product_id]['rq'] = ($rq > 0) ? $rq : '';
		}
		
		$data['cancel'] = $this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true);
		$data['pdf_export'] = $this->url->link('purchase/purchase_order/view_order_details', 'token=' . $this->session->data['token'] . $url, true);
		if(isset($_GET['export']))
		{
			
			$data['company_name'] = $this->config->get('config_name'); // store name
			$data['company_title'] = $this->config->get('config_title'); // store title
			$data['company_owner'] = $this->config->get('config_owner'); // store owner name
			$data['company_email'] = $this->config->get('config_email'); // store email
			$data['company_address'] = $this->config->get('config_address');//store address
				
			$html = $this->load->view('purchase/print_order.tpl',$data);
			
			$base_url = HTTP_CATALOG;
			
			//new mPDF($mode, $format, $font_size, $font, $margin_left, $margin_right, $margin_top, $margin_bottom, $margin_header, $margin_footer, $orientation);
			
			$mpdf = new mPDF('c','A4','','' , 5 , 5 , 25 , 10 , 5 , 7); 
			
			$header = '<div class="header"><div class="logo"><img src="'.$base_url.'image/catalog/logo.png" /></div><div class="company"><h3>'.$data['company_name'].'</h3></div></div><hr />';
 
			$mpdf->SetHTMLHeader($header, 'O', false);
				
			$footer = '<div class="footer"><div class="address"><b>Adress: </b>'.$data['company_address'].'</div><div class="pageno">{PAGENO}</div></div>';
				
			$mpdf->SetHTMLFooter($footer);
			
			//$mpdf->setFooter('{PAGENO}');
				 
			$mpdf->SetDisplayMode('fullpage');
 
			$mpdf->list_indent_first_level = 0;
 
			$mpdf->WriteHTML($html);
			
			$mpdf->Output();
		}
		else
		{
			$this->response->setOutput($this->load->view('purchase/view_order.tpl',$data));
		}
	}
	
	/*----------------------------view_order_details function ends here--------------*/
	
	
	/*-----------------------------Filter function starts here------------------------*/
	
	public function filter()
	{
		
		$this->load->language('purchase/purchase_order');
		$this->document->setTitle($this->language->get('title'));
		
		//languages
		
		//headings
		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_list'] = $this->language->get('text_list');
		
		//fields
		$data['field_order_id'] = $this->language->get('field_order_id');
		$data['field_status'] = $this->language->get('field_status');
		$data['field_from'] = $this->language->get('field_from');
		$data['field_to'] = $this->language->get('field_to');
		
		//columns
		$data['column_order_id'] = $this->language->get('column_order_id');
		$data['column_date'] = $this->language->get('column_date');
		$data['column_order_by'] = $this->language->get('column_order_by');
		$data['column_supplier'] = $this->language->get('column_supplier');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_action'] = $this->language->get('column_action');
		
		//buttons
		$data['button_filter'] = $this->language->get('button_filter');
		$data['button_clear'] = $this->language->get('button_clear');
		
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$url = '';

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);
			
		$data['breadcrumbs'][] = array(
			'text' => $data['heading_title'],
			'href' => $this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true)
		);
		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		$this->load->model('purchase/purchase_order');
		$total_orders = $this->model_purchase_purchase_order->getTotalOrders();
		
		$start = ($page-1)*20;
		$limit = 20;
		
		if(!empty($_POST))
		{
			$_SESSION['post'] = $_POST;
			$post = $_SESSION['post'];
		}
		else
		{
			$post = $_SESSION['post'];
		}
		
		if(count(array_filter($post,'strlen')) != 0)
		{
			$filter = array_filter($post,'strlen');
			
			$data['order_list'] = $this->model_purchase_purchase_order->filter($filter,$start,$limit);
			if(!$data['order_list'])
			{
				$data['order_list'] = $this->model_purchase_purchase_order->getList($start,$limit);
				$_SESSION['nothing_found_error'] = "Sorry! no data matches your query,try another";
			}
			else
			{
				$data['filter_id'] = $post['filter_id'];
				$data['status'] = $post['status'];
				$data['from'] = $post['from'];
				$data['to'] = $post['to'];
				
				$total_orders = $this->model_purchase_purchase_order->filterCount($filter);
			}
		}
		else
		{
			$data['order_list'] = $this->model_purchase_purchase_order->getList($start,$limit);
		}
		
		$pagination = new Pagination();
		$pagination->total = $total_orders;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('purchase/purchase_order/filter', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);
				
		$data['pagination'] = $pagination->render();
		
		$data['results'] = sprintf($this->language->get('text_pagination'), ($total_orders) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($total_orders - $this->config->get('config_limit_admin'))) ? $total_orders : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $total_orders, ceil($total_orders / $this->config->get('config_limit_admin')));
		$data['view'] = $this->url->link('purchase/purchase_order/view_order_details', 'token=' . $this->session->data['token'] . $url, true);
		$data['filter'] = $this->url->link('purchase/purchase_order/filter', 'token=' . $this->session->data['token'] . $url, true);
		$data['receive'] = $this->url->link('purchase/purchase_order/receive_order', 'token=' . $this->session->data['token'] . $url, true);
		$data['add'] = $this->url->link('purchase/purchase_order/add', 'token=' . $this->session->data['token'] . $url, true);
		$this->response->setOutput($this->load->view('purchase/purchase_order_list.tpl', $data));
	}
	
	/*-----------------------------Filter function ends here--------------------------*/
	
	/*-----------------------------Receive order function starts here------------------*/
	
	public function receive_order()
	{
		$this->load->language('purchase/purchase_order');
		$order_id = $this->request->get['order_id'];
		$data['order_id'] = $order_id;
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		
		$url = '';

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => "Home",
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);
			
		$data['breadcrumbs'][] = array(
			'text' => "Purchase Orders",
			'href' => $this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true)
		);
		
		$this->load->model('purchase/purchase_order');
		$data['order'] = $this->model_purchase_purchase_order->view_order_details($order_id);
		
		
		//reindexing the supplier_ids,receive_quantities,prices
		// also to calculate remaining quantity
		
		foreach($data['order']['products'] as $product_id => $product)
		{
			$data['order']['products'][$product_id]['supplier_ids'] = array_values($product['supplier_ids']);
			$data['order']['products'][$product_id]['receive_quantities'] = array_values($product['receive_quantities']);
			$data['order']['products'][$product_id]['prices'] = array_values($product['prices']);
			
			//calculating remaining quantity
			$data['order']['products'][$product_id]['rq'] = $product['quantity'] - array_sum($product['receive_quantities']);
		}
		$data['action'] = $this->url->link('purchase/purchase_order/insert_receive_order', 'token=' . $this->session->data['token'] . $url, true);
		$data['cancel'] = $this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true);
		
		$this->load->model('purchase/supplier');
		$data['suppliers'] = $this->model_purchase_supplier->get_total_suppliers();
		
		$this->response->setOutput($this->load->view('purchase/receive_order.tpl',$data));
	}
	
	/*-----------------------------Receive order function ends here-----------------*/
	
	/*-----------------------------insert receive order function starts here-------------------*/
	
	public function insert_receive_order()
	{
		$error = false;
		
		$order_id = $this->request->get['order_id'];
		
		$url = ''; 
		
		$data['products'] = $_POST['product'];
		
		//checking for error
		
		if(empty($_POST['order_receive_date']))
		{
			$error = true;
		}
		else
		{
			foreach($data['products'] as $product){
				
				$supplier_count = count(array_filter($product['supplier']));
				$receive_count = count(array_filter($product['receive_quantity']));
				$price_count = count(array_filter($product['price']));
				if($supplier_count!=$receive_count){
					$error = true;
					break;
				}
				
				if($supplier_count!=$price_count){
					$error = true;
					break;
				}
				
				if($price_count!= $receive_count){
					$error = true;
					break;
				}
				
				if (!array_filter($product['price'],'is_numeric')) {
					$error = true;
					break;
				}
				if (!array_filter($product['receive_quantity'],'is_numeric')) {
					$error = true;
					break;
				}
			}
		}
		
		if($order_id)
		{
			$url .= '&order_id=' . $order_id;
		}
		
		if($error)
		{
            $this->load->language("purchase/purchase_order");
            //error to display
            $_SESSION['empty_fields_error'] = $this->language->get('error_empty_fields');
            $_SESSION['numeric_error'] =$this->language->get('error_numeric');
            $_SESSION['required'] = $this->language->get('error_required');
			
			// breadcrumbs
			$data['breadcrumbs'] = array();

			$data['breadcrumbs'][] = array(
			'text' => "Home",
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
			);
			
			$data['breadcrumbs'][] = array(
			'text' => "Purchase Orders",
			'href' => $this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true)
			);
			
			//common views
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');
			
			//getting order information
			$this->load->model('purchase/purchase_order');
			$data['order'] = $this->model_purchase_purchase_order->view_order_details($order_id);
			foreach($data['order']['products'] as $product_id => $product)
			{
				$data['order']['products'][$product_id]['supplier_ids'] = $data['products'][$product_id]['supplier'];
				$data['order']['products'][$product_id]['receive_quantities'] = $data['products'][$product_id]['receive_quantity'];
				$data['order']['products'][$product_id]['prices'] = $data['products'][$product_id]['price'];
				$data['order']['products'][$product_id]['rq'] = $data['products'][$product_id]['rq'];
			}
			$data['order_info']['order_receive_date'] = $_POST['order_receive_date'];
			//order id for inserting
			$data['order_id'] = $order_id;
			
			//url to land in specific conditions
			$data['action'] = $this->url->link('purchase/purchase_order/insert_receive_order', 'token=' . $this->session->data['token'] . $url, true);
			$data['cancel'] = $this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true);
			
			$this->load->model('purchase/supplier');
			$data['suppliers'] = $this->model_purchase_supplier->get_total_suppliers();
			$this->response->setOutput($this->load->view('purchase/receive_order.tpl',$data));
		}
		else
		{
			$this->load->model('purchase/purchase_order');
			$inserted = $this->model_purchase_purchase_order->insert_receive_order($_POST,$order_id);
			
			if($inserted)
			{
				$_SESSION['receive_success_message'] = 'Order received Successfully!!';
				$this->response->redirect($this->url->link('purchase/purchase_order', 'token=' . $this->session->data['token'] . $url, true));
			}
			else
			{
				$_SESSION['something_wrong_message'] = 'Sorry!! something went wrong, try again';
				$this->response->redirect($this->url->link('purchase/purchase_order/insert_receive_order', 'token=' . $this->session->data['token'] . $url, true));
			}
				
		}
	}
	
	public function autocomplete() {
		$json = array();

		if (isset($this->request->get['product_name'])) {
			$this->load->model('purchase/purchase_order');

			$product_data = array(
				'product_name' => $this->request->get['product_name'],
				'start'       => 0,
				'limit'       => 5
			);

			$products = $this->model_purchase_purchase_order->getProductSuggestions($product_data);
			foreach ($products as $product) {
				$json[] = array(
					'product_id' => $product['product_id'],
					'name'      => strip_tags(html_entity_decode($product['name'], ENT_QUOTES, 'UTF-8'))
				);
			}
		}

		$sort_order = array();

		foreach ($json as $key => $value) {
			$sort_order[$key] = $value['name'];
		}

		array_multisort($sort_order, SORT_ASC, $json);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	
	/*-----------------------------insert receive order function ends here-----------------*/
	
}

?>