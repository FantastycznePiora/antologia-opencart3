<?php
	/*
	 * A simple received_orders controller
	 * 
	 * This controller is intended to generate the receive order reports
	 * Reports can also be generated on the basis of filter.
	 * 
	 * @author Turaab Ali
	 * @version 1.0
	 * 
	*/
	class ControllerPurchaseReceivedOrders extends Controller {
		
		/** 
		 * function to get all the received orders.
		 * 
		 * This function will also be used to get the filtered received orders
		 * 
		 * It will also be used to export the orders as PDF (it will use mpdf for this)
		 */ 
		
		public function index() 
		{
			$this->load->language('purchase/received_orders');
			$this->load->model('purchase/received_orders');
			$this->document->setTitle($this->language->get('heading_title'));
			
			if (isset($this->request->get['date_start'])) {
				$date_start = $this->request->get['date_start'];
			} else {
				$date_start = null;
			}

			if (isset($this->request->get['date_end'])) {
				$date_end = $this->request->get['date_end'];
			} else {
				$date_end = null;
			}

			if (isset($this->request->get['supplier'])) {
				$supplier = $this->request->get['supplier'];
			} else {
				$supplier = null;
			}

			if (isset($this->request->get['product'])) {
				$product = $this->request->get['product'];
			} else {
				$product = null;
			}

			if (isset($this->request->get['order_id'])) {
				$order_id = $this->request->get['order_id'];
			} else {
				$order_id = null;
			}
			
			$url = '';
			
			if (isset($this->request->get['date_start'])) {
				$url .= '&date_start=' . urlencode(html_entity_decode($this->request->get['date_start'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['date_end'])) {
				$url .= '&date_end=' . urlencode(html_entity_decode($this->request->get['date_end'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['supplier'])) {
				$url .= '&supplier=' . $this->request->get['supplier'];
			}

			if (isset($this->request->get['product'])) {
				$url .= '&product=' . $this->request->get['product'];
			}

			if (isset($this->request->get['order_id'])) {
				$url .= '&order_id=' . $this->request->get['order_id'];
			}
			
			
			if (isset($this->request->get['page'])) {
				$page = $this->request->get['page'];
			} else {
				$page = 1;
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
			
			$start = ($page-1)*20;
			$limit = 20;
			
			$filter_data = array(
				'date_start'	  => $date_start,
				'date_end'	  => $date_end,
				'supplier'	  => $supplier,
				'product' => $product,
				'order_id'   => $order_id,
				'start' => $start,
				'limit' => $limit
			);
			
			$data['breadcrumbs'] = array();

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
			);
			
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('purchase/received_orders', 'token=' . $this->session->data['token'] . $url, true)
			);

			$data['heading_title'] = $this->language->get('heading_title');

			$data['text_list'] = $this->language->get('text_list');
			$data['text_no_results'] = $this->language->get('text_no_results');
			$data['text_confirm'] = $this->language->get('text_confirm');
			$data['text_all_status'] = $this->language->get('text_all_status');
			$data['entry_date_start'] = $this->language->get('entry_date_start');
			$data['entry_date_end'] = $this->language->get('entry_date_end');
			$data['entry_supplier'] = $this->language->get('entry_supplier');
			$data['entry_product'] = $this->language->get('entry_product');
			$data['entry_order_id'] = $this->language->get('entry_order_id');
			$data['button_filter'] = $this->language->get('button_filter');
			
			$data['column_order_id'] = $this->language->get('column_order_id');
			$data['column_date_start'] = $this->language->get('column_date_start');
			$data['column_date_end'] = $this->language->get('column_date_end');
			$data['column_supplier'] = $this->language->get('column_supplier');
			$data['column_product'] = $this->language->get('column_product');
			$data['column_quantity'] = $this->language->get('column_quantity');
			$data['column_price'] = $this->language->get('column_price');
			$data['column_total_products'] = $this->language->get('column_total_products');
			$data['column_total'] = $this->language->get('column_total');
			$data['grand_total_text'] = $this->language->get('grand_total');
			
			//button
			
			$data['button_clear'] = $this->language->get('button_clear');
			$data['button_export'] = $this->language->get('button_export');
			
			$data['token'] = $this->session->data['token'];
			$this->load->model('purchase/received_orders');
			
			$data['pdf_export'] = $this->url->link('purchase/received_orders', 'token=' . $this->session->data['token'] . $url, true);
			
			$data['header'] = $this->load->controller('common/header');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');
			
			$data['date_start'] = $date_start;
			$data['date_end'] = $date_end;
			$data['fsupplier'] = $supplier;
			$data['fproduct'] = $product;
			$data['order_id'] = $order_id;
			
			$data['suppliers'] = $this->model_purchase_received_orders->getAllSuppliers();
			
			$this->load->model('catalog/product');
			
			$products = array();
			
			$products = $this->model_catalog_product->getProducts($products);
			
			foreach($products as $product){
				$data['products'][] = $product['name'];
			}
			
			$total_orders = $this->model_purchase_received_orders->getTotalReceivedOrders($filter_data);
			$data['received_orders'] = $this->model_purchase_received_orders->getReceivedOrders($filter_data);
				
			$grand_total = 0;
			foreach($data['received_orders'] as $order_id => $received_order){
				$total = 0;
				foreach($received_order['sprice'] as $sprice){
					$total += array_sum($sprice);
				}
				$data['received_orders'][$order_id]['total'] = round($total,2);
				$grand_total += $total;
			}
			$data['grand_total'] = round($grand_total,2);
			
			//if export button is pressed
			if(isset($this->request->get['export'])){
				$data['company_name'] = $this->config->get('config_name'); 
				$data['company_title'] = $this->config->get('config_title'); 
				$data['company_owner'] = $this->config->get('config_owner'); 
				$data['company_email'] = $this->config->get('config_email');
				$data['company_address'] = $this->config->get('config_address');
			
				$html = $this->load->view('purchase/print_received_orders.tpl',$data);
			
				//new mPDF($mode, $format, $font_size, $font, $margin_left, $margin_right, $margin_top, $margin_bottom, $margin_header, $margin_footer, $orientation);
			
				$mpdf = new mPDF('c','A4','','' , 10 , 10 , 25 , 10 , 5 , 7); 
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
			
			//pagination
			$pagination = new Pagination();
			$pagination->total = $total_orders;
			$pagination->page = $page;
			$pagination->limit = $this->config->get('config_limit_admin');
			$pagination->url = $this->url->link('purchase/received_orders', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);
			
			$data['pagination'] = $pagination->render();
			
			$data['results'] = sprintf($this->language->get('text_pagination'), ($total_orders) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($total_orders - $this->config->get('config_limit_admin'))) ? $total_orders : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $total_orders, ceil($total_orders / $this->config->get('config_limit_admin')));

		
			$this->response->setOutput($this->load->view('purchase/received_orders.tpl', $data));
		}
	}
?>