<?php
	class ControllerPurchaseReturnOrders extends Controller {
		public function index($return_orders = array()) {
			$url = '';
			$this->load->language('purchase/return_orders');
			$this->load->model('purchase/return_orders');
			
			$data['heading_title'] = $this->language->get('heading_title');
			$data['text_list'] = $this->language->get('text_list');
			
			
			$data['column_return_id'] = $this->language->get('column_return_id');
			$data['column_order_id'] = $this->language->get('column_order_id');
			$data['column_product'] = $this->language->get('column_product');
			$data['column_date'] = $this->language->get('column_date');
			$data['column_supplier'] = $this->language->get('column_supplier');
			$data['column_action'] = $this->language->get('column_action');
			$data['column_added_by'] = $this->language->get('column_added_by');
			$data['column_quantity'] = $this->language->get('column_quantity');
			
			$data['entry_order_id'] = $this->language->get('entry_order_id');
			$data['entry_return_id'] = $this->language->get('entry_return_id');
			$data['entry_product'] = $this->language->get('entry_product');
			$data['entry_start_date'] = $this->language->get('entry_start_date');
			$data['entry_supplier'] = $this->language->get('entry_supplier');
			$data['entry_end_date'] = $this->language->get('entry_end_date');
			
			$data['text_confirm'] = $this->language->get('text_confirm');
			
			$data['button_add'] = $this->language->get('button_add');
			$data['button_edit'] = $this->language->get('button_edit');
			$data['button_delete'] = $this->language->get('button_delete');
			$data['button_filter'] = $this->language->get('button_filter');
			$data['button_clear'] = $this->language->get('button_clear');
			
			$data['token'] = $this->session->data['token'];
			
			$data['suppliers'] = $this->model_purchase_return_orders->getAllSuppliers();
			$this->load->model('catalog/product');
			$products = array();
			$products = $this->model_catalog_product->getProducts($products);
			foreach($products as $product)
			{
				$data['products'][] = $product['name'];
			}
			
			$url ='';
			
			$data['breadcrumbs'] = array();

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
			);

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true)
			);
			$total_return_orders = $this->model_purchase_return_orders->getTotalReturnOrders();
			
			if(isset($return_orders['return_orders']) && count($return_orders['return_orders']) > 0)
			{
				$total_return_orders = count($return_orders['return_orders']);
			}
			elseif(isset($return_orders['return_orders']) && count($return_orders['return_orders']) == 0)
			{
				$total_return_orders = 0;
			}
			
			if (isset($this->request->get['page'])) {
				$page = $this->request->get['page'];
			} else {
				$page = 1;
			}
			
			/*$start = ($page - 1) * 20;
			$limit = 20;*/
			
			/*pagination*/
			$pagination = new Pagination();
			$pagination->total = $total_return_orders;
			$pagination->page = $page;
			$pagination->limit = $this->config->get('config_limit_admin');
			if(isset($return_orders['filter_bit']))
			{
				$pagination->url = $this->url->link('purchase/return_orders/filter', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);
			}
			else{
				$pagination->url = $this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);
			}
			$data['pagination'] = $pagination->render();
			
			$data['results'] = sprintf($this->language->get('text_pagination'), ($total_return_orders) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($total_return_orders - $this->config->get('config_limit_admin'))) ? $total_return_orders : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $total_return_orders, ceil($total_return_orders / $this->config->get('config_limit_admin')));

			
			/*pagination*/
			$data['add'] = $this->url->link('purchase/return_orders/add', 'token=' . $this->session->data['token'] . $url, true);
			$data['delete'] = $this->url->link('purchase/return_orders/delete', 'token=' . $this->session->data['token'] . $url, true);
			$data['filter'] = $this->url->link('purchase/return_orders/filter', 'token=' . $this->session->data['token'] . $url, true);
			$data['edit'] = $this->url->link('purchase/return_orders/edit', 'token=' . $this->session->data['token'] . $url, true);
			if(isset($return_orders['return_orders']))
			{
				if(count($return_orders['return_orders']) > 0)
				{
					$data['return_orders'] = $return_orders['return_orders'];
					
					$data['return_id'] = $return_orders['return_id'];
					$data['order_id'] = $return_orders['order_id'];
					$data['filter_product'] = $return_orders['product'];
					$data['filter_supplier'] = $return_orders['supplier'];
					$data['start_date'] = $return_orders['start_date'];
					$data['end_date'] = $return_orders['end_date'];
					if($page > 1)
					{
						$omit = ($page * 20) - 20;
						$data['return_orders'] = array_slice ($data['return_orders'], $omit);
						$data['page_no'] = $page; 
					}
					else
					{
						$data['return_orders'] = array_slice($data['return_orders'],0,20);
						$data['page_no'] = $page;
					}
				}
			}
			else
			{
				$data['return_orders'] = $this->model_purchase_return_orders->getList();
				
				if($page > 1)
				{
					$omit = ($page * 20) - 20;
					$data['return_orders'] = array_slice ($data['return_orders'], $omit);
					$data['page_no'] = $page; 
				}
				else
				{
					$data['return_orders'] = array_slice($data['return_orders'],0,20);
					$data['page_no'] = $page;
				}
			}
			
			$data['header'] = $this->load->controller('common/header');
			
			if(isset($return_orders['export_bit']))
			{
				if($_POST['page_no'] != '')
				{
					$data['return_orders'] = $this->model_purchase_return_orders->getList();
				}
				$data['company_name'] = $this->config->get('config_name'); // store name
				$data['company_title'] = $this->config->get('config_title'); // store title
				$data['company_owner'] = $this->config->get('config_owner'); // store owner name
				$data['company_email'] = $this->config->get('config_email'); // store email
				$data['company_address'] = $this->config->get('config_address');//store address
			
				
				
				$html = $this->load->view('purchase/print_return_orders.tpl',$data);
			
				//new mPDF($mode, $format, $font_size, $font, $margin_left, $margin_right, $margin_top, $margin_bottom, $margin_header, $margin_footer, $orientation);
			
				$mpdf = new mPDF('c','A4','','' , 10 , 10 , 25 , 10 , 5 , 7); 
			
				//$base_url = $this->config->get('config_url');
				
				$base_url = HTTP_CATALOG;
				
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
				$data['column_left'] = $this->load->controller('common/column_left');
				$data['footer'] = $this->load->controller('common/footer');
				$this->response->setOutput($this->load->view('purchase/return_orders_list.tpl', $data));
			}
		}
		
		
		public function add()
		{
			$url = '';
			$this->load->language('purchase/return_orders');
			
			$data['heading_title'] = $this->language->get('heading_title');
			$data['text_order_returns'] = $this->language->get('text_order_returns');
			$data['entry_reason'] = $this->language->get('entry_reason');
			
			$data['entry_order_id'] = $this->language->get('entry_order_id');
			$data['entry_product'] = $this->language->get('entry_product');
			$data['entry_supplier'] = $this->language->get('entry_supplier');
			$data['entry_quantity'] = $this->language->get('entry_quantity');
           

			$data['button_save'] = $this->language->get('button_save');
			$data['button_cancel'] = $this->language->get('button_cancel');
			
			$data['token'] = $this->session->data['token'];
			
			$url ='';
			$data['breadcrumbs'] = array();

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
			);

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true)
			);
			
			$data['order_id'] = null;
			$data['product_id'] = null;
			$data['supplier_id'] = null;
			$data['return_quantity'] = null;
			$data['reason'] = null;
			
			$data['error_warning'] = null;
			$data['error_order_id'] = null;
			$data['product_error'] = null;
			$data['supplier_error'] = null;
			$data['quantity_error'] = null;
			$data['reason_error'] = null;
			
			
			$data['save_return_order'] = $this->url->link('purchase/return_orders/saveReturnOrder', 'token=' . $this->session->data['token'] . $url, true);
			$data['cancel'] = $this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true);
			
			$data['header'] = $this->load->controller('common/header');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');
			$this->response->setOutput($this->load->view('purchase/return_order_form.tpl', $data));
		}
		
		public function saveReturnOrder()
		{
			$url = '';
			$this->load->language('purchase/return_orders');
			$this->load->model('purchase/return_orders');
			
			$error = array();
			//checking for errors
			if (empty($this->request->post['order_id'])) {
				$error['error_order_id'] = $this->language->get('error_order_id');
				$data['order_id'] = null;
			}else {
				$data['order_id'] = $this->request->post['order_id'];
			}
			
			if (empty($this->request->post['product'])) {
				$error['product_error'] = $this->language->get('product_error');
				$data['product_id'] = null;
			}else {
				$data['product_id'] = $this->request->post['product'];
			}
			
			if (empty($this->request->post['supplier'])) {
				$error['supplier_error'] = $this->language->get('supplier_error');
				$data['supplier_id'] = null;
			}else {
				$data['supplier_id'] = $this->request->post['supplier'];
			}
			
			if (empty($this->request->post['return_quantity'])) {
				$error['quantity_error'] = $this->language->get('quantity_error');
				$data['return_quantity'] = null;
			}else {
				$data['return_quantity'] = $this->request->post['return_quantity'];
			}
			
			if(empty($this->request->post['reason']))
			{
				$error['reason_error'] = $this->language->get('reason_error');
				$data['reason'] = null;
			}else {
				$data['reason'] = $this->request->post['reason'];
			}
			
			//error to display on view
			if (isset($error['error_order_id'])) {
				$data['error_order_id'] = $error['error_order_id'];
			}else {
				$data['error_order_id'] = null;
			}
			
			if (isset($error['product_error'])) {
				$data['product_error'] = $error['product_error'];
			}else {
				$data['product_error'] = null;
			}
			
			if (isset($error['supplier_error'])) {
				$data['supplier_error'] = $error['supplier_error'];
			}else {
				$data['supplier_error'] = null;
			}
			
			if (isset($error['quantity_error'])) {
				$data['quantity_error'] = $error['quantity_error'];
			}else {
				$data['quantity_error'] = null;
			}
			
			if (isset($error['reason_error'])) {
				$data['reason_error'] = $error['reason_error'];
			}else {
				$data['reason_error'] = null;
			}
			
			
			if (!empty($error)) {
				$data['error_warning'] = $this->language->get('error_warning');
				
				if ($data['order_id']) {
					$data['products'] = $this->model_purchase_return_orders->getProducts($data['order_id']);
				}
				
				if ($data['product_id']) {
					$data['suppliers'] = $this->model_purchase_return_orders->getSuppliers($data['order_id'],$data['product_id']);
				}
				$data['heading_title'] = $this->language->get('heading_title');
				$data['text_order_returns'] = $this->language->get('text_order_returns');
				
				$data['entry_order_id'] = $this->language->get('entry_order_id');
				$data['entry_product'] = $this->language->get('entry_product');
				$data['entry_supplier'] = $this->language->get('entry_supplier');
				$data['entry_quantity'] = $this->language->get('entry_quantity');
				$data['entry_reason'] = $this->language->get('entry_reason');
				
				$data['button_save'] = $this->language->get('button_save');
				$data['button_cancel'] = $this->language->get('button_cancel');
				
				$data['token'] = $this->session->data['token'];
				
				$url ='';
				$data['breadcrumbs'] = array();

				$data['breadcrumbs'][] = array(
					'text' => $this->language->get('text_home'),
					'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
				);

				$data['breadcrumbs'][] = array(
					'text' => $this->language->get('heading_title'),
					'href' => $this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true)
				);
				
				
				$data['save_return_order'] = $this->url->link('purchase/return_orders/saveReturnOrder', 'token=' . $this->session->data['token'] . $url, true);
				
				$data['header'] = $this->load->controller('common/header');
				$data['column_left'] = $this->load->controller('common/column_left');
				$data['footer'] = $this->load->controller('common/footer');
				$this->response->setOutput($this->load->view('purchase/return_order_form.tpl', $data));

			}
			else
			{
				$saved = $this->model_purchase_return_orders->save_return_order($this->request->post);
				if($saved)
				{
					$_SESSION['text_success'] = $this->language->get('text_success');
					$this->response->redirect($this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true));
				}
				else
				{
					$_SESSION['error_wrong'] = $this->language->get('error_wrong');
					$this->response->redirect($this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true));
				}
			}
		}
		
		public function getProducts()
		{
			$order_id = $this->request->get['order_id'];
			$this->load->model('purchase/return_orders');
			$data['products'] = $this->model_purchase_return_orders->getProducts($order_id);
			echo json_encode($data['products']);
		}
		public function getSuppliers()
		{
			$order_id = $this->request->post['order_id'];
			$product_id = $this->request->post['product_id'];
			$this->load->model('purchase/return_orders');
			$data['suppliers'] = $this->model_purchase_return_orders->getSuppliers($order_id,$product_id);
			echo json_encode($data['suppliers']);
		}
		public function checkQuantity()
		{	
			$order_id = $this->request->post['order_id'];
			$product_id = $this->request->post['product_id'];
			$supplier_id = $this->request->post['supplier_id'];
			$this->load->model('purchase/return_orders');
			$quantity = $this->model_purchase_return_orders->checkQuantity($order_id,$product_id,$supplier_id);
			echo $quantity['quantity'];
		}
		public function delete()
		{
			$url = '';
			$delete_ids = $this->request->post['selected'];
			$this->load->model('purchase/return_orders');
			$this->load->language('purchase/return_orders');
			$deleted = $this->model_purchase_return_orders->delete($delete_ids);
			if($deleted)
			{
				$_SESSION['text_delete_success'] = $this->language->get('text_delete_success');
				$this->response->redirect($this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true));
			}
			else
			{
				$_SESSION['error_wrong'] = $this->language->get('error_wrong');
				$this->response->redirect($this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true));
			}
		}
		public function filter()
		{
			$url = '';
			if(!empty($_POST))
			{
				$_SESSION['post'] = $_POST;
				$post = $_SESSION['post'];
			}
			else
			{
				if(isset($_SESSION['post']))
				{
					$post = $_SESSION['post'];
				}
			}
			$data['return_id'] = $post['filter_return_id'];
			$data['order_id'] = $post['filter_order_id'];
			$data['product'] = $post['filter_product'];
			$data['supplier'] = $post['filter_supplier'];
			$data['start_date'] = $post['filter_start_date'];
			$data['end_date'] = $post['filter_end_date'];
			$this->load->model('purchase/return_orders');
			$data['return_orders'] = $this->model_purchase_return_orders->filter($data);
			if(isset($this->request->post['export_bit']))
			{
				$data['export_bit'] = $this->request->post['export_bit'];
			}
			if(isset($post['filter_bit']))
			{
				$data['filter_bit'] = $post['filter_bit'];
			}
			$this->index($data);
		}
		public function edit()
		{
			$url = '';
			$return_order_id = $this->request->get['return_order_id'];
			$this->load->language('purchase/return_orders');
			
			$data['heading_title'] = $this->language->get('heading_title');
			$data['text_order_returns'] = $this->language->get('text_order_returns');
			
			$data['entry_order_id'] = $this->language->get('entry_order_id');
			$data['entry_product'] = $this->language->get('entry_product');
			$data['entry_supplier'] = $this->language->get('entry_supplier');
			$data['entry_quantity'] = $this->language->get('entry_quantity');
			
			$data['button_save'] = $this->language->get('button_save');
			$data['button_cancel'] = $this->language->get('button_cancel');
			
			$data['token'] = $this->session->data['token'];
			
			$url ='';
			$data['breadcrumbs'] = array();

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
			);

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true)
			);
			
			
			$data['update_return_order'] = $this->url->link('purchase/return_orders/update_return_order', 'token=' . $this->session->data['token'] . $url, true);
			$data['cancel'] = $this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true);
			$this->load->model('purchase/return_orders');
			$return_order = $this->model_purchase_return_orders->getReturnOrder($return_order_id);
			
			$data['order_id'] = $return_order['order_id'];
			$data['product'] = $return_order['product_id'];
			$data['supplier'] = $return_order['supplier_id'];
			$data['return_quantity'] = $return_order['return_quantity'];
			$data['reason'] = $return_order['reason'];
			
			$data['products'] = $this->model_purchase_return_orders->getProducts($return_order['order_id']);
			$data['suppliers'] = $this->model_purchase_return_orders->getSuppliers($return_order['order_id'],$return_order['product_id']);
				
			$data['header'] = $this->load->controller('common/header');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');
			$this->response->setOutput($this->load->view('purchase/return_order_update_form.tpl', $data));
		
		}
		public function update_return_order()
		{
			$url = '';
			$this->load->language('purchase/return_orders');
			$this->load->model('purchase/return_orders');
			
			$order_id = $this->request->post['order_id'];
			$product = $this->request->post['product'];
			$supplier = $this->request->post['supplier'];
			$return_quantity = $this->request->post['return_quantity'];
			
			if ($return_quantity == "") {
				$_SESSION['quantity_error'] = $this->language->get('quantity_error');
			}
			
			if(isset($_SESSION['quantity_error']))
			{
				$_SESSION['error_warning'] = $this->language->get('error_warning');
				$data['order_id'] = $order_id;
				$data['product'] = $product;
				$data['supplier'] = $supplier;
				$data['return_quantity'] = $return_quantity;
				
				if($order_id)
				{
					$data['products'] = $this->model_purchase_return_orders->getProducts($order_id);
				}
				if($order_id && $product)
				{
					$data['suppliers'] = $this->model_purchase_return_orders->getSuppliers($order_id,$product);
				}
				$data['heading_title'] = $this->language->get('heading_title');
				$data['text_order_returns'] = $this->language->get('text_order_returns');
				
				$data['entry_order_id'] = $this->language->get('entry_order_id');
				$data['entry_product'] = $this->language->get('entry_product');
				$data['entry_supplier'] = $this->language->get('entry_supplier');
				$data['entry_quantity'] = $this->language->get('entry_quantity');
				
				$data['button_save'] = $this->language->get('button_save');
				$data['button_cancel'] = $this->language->get('button_cancel');
				
				$data['token'] = $this->session->data['token'];
				
				$url ='';
				$data['breadcrumbs'] = array();

				$data['breadcrumbs'][] = array(
					'text' => $this->language->get('text_home'),
					'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
				);

				$data['breadcrumbs'][] = array(
					'text' => $this->language->get('heading_title'),
					'href' => $this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true)
				);
				
				
				$data['update_return_order'] = $this->url->link('purchase/return_orders/update_return_order', 'token=' . $this->session->data['token'] . $url, true);
				$data['cancel'] = $this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true);
			
				$data['header'] = $this->load->controller('common/header');
				$data['column_left'] = $this->load->controller('common/column_left');
				$data['footer'] = $this->load->controller('common/footer');
				$this->response->setOutput($this->load->view('purchase/return_order_update_form.tpl', $data));

			}
			else
			{
				$data['order_id'] = $order_id;
				$data['product_id'] = $product;
				$data['supplier'] = $supplier;
				$data['return_quantity'] = $return_quantity;
				$updated = $this->model_purchase_return_orders->update_return_order($data);
				if($updated)
				{
					$_SESSION['text_success_updated'] = $this->language->get('text_success_updated');
					$this->response->redirect($this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true));
				}
				else
				{
					$_SESSION['error_no_change'] = $this->language->get('error_no_change');
					$this->response->redirect($this->url->link('purchase/return_orders', 'token=' . $this->session->data['token'] . $url, true));
				}
			}
		}
		public function checkUpdateQuantity()
		{
			$order_id = $this->request->post['order_id'];
			$product_id = $this->request->post['product_id'];
			$supplier_id = $this->request->post['supplier_id'];
			$this->load->model('purchase/return_orders');
			$quantity = $this->model_purchase_return_orders->checkUpdateQuantity($order_id,$product_id,$supplier_id);
			echo $quantity['quantity'];
		}
	}
?>