<?php
	/*
	 * A simple pending orders controller
	 * 
	 * This controller is intended to generate the receive order reports
	 * TODO: Reports can also be generated throught filters
	 * 
	 * @author Turaab Ali
	 * @version 1.0
	 * 
	*/
	class ControllerPurchasePendingOrders extends Controller {
		/** 
		 * function to get all the pending orders.
		 * 
		 * TODO:This function will also be used to get the filtered received orders
		 * 
		 * It will also be used to export the orders as PDF (it will use mpdf for this)
		 */ 
		public function index() 
		{
			$this->load->language('purchase/pending_orders');
			$this->document->setTitle($this->language->get('heading_title'));
			$data['heading_title'] = $this->language->get('heading_title');
			
			//column
			$data['column_order_id'] = $this->language->get('column_order_id');
			$data['column_order_date'] = $this->language->get('column_order_date');
			$data['column_total_products'] = $this->language->get('column_total_products');
			$data['column_supplier'] = $this->language->get('column_supplier');
			
			//text
			$data['text_no_results'] = $this->language->get('text_no_results');
			$data['text_confirm'] = $this->language->get('text_confirm');
			$data['text_all_status'] = $this->language->get('text_all_status');
			$data['text_list'] = $this->language->get('text_list');
			
			//button
			$data['button_export'] = $this->language->get('button_export');
			
			$url = '';
			
			//breadcrumbs
			$data['breadcrumbs'] = array();

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
			);
			
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('purchase/pending_orders', 'token=' . $this->session->data['token'] . $url, true)
			);
			
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
				'start' => $start,
				'limit' => $limit
			);
			
			$data['token'] = $this->session->data['token'];
			
			$this->load->model('purchase/pending_orders');
			
			$total_orders = $this->model_purchase_pending_orders->getTotalOrders($filter_data);
			$data['pending_orders'] = $this->model_purchase_pending_orders->getPendingOrders($filter_data);
			
			//if export button is pressed
			if (isset($this->request->get['export'])) {
				$data['company_name'] = $this->config->get('config_name'); 
				$data['company_title'] = $this->config->get('config_title'); 
				$data['company_owner'] = $this->config->get('config_owner'); 
				$data['company_email'] = $this->config->get('config_email');
				$data['company_address'] = $this->config->get('config_address');
			
				$html = $this->load->view('purchase/print_pending_orders.tpl',$data);
			
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
			
			$data['header'] = $this->load->controller('common/header');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');
			
			//pagination
			$pagination = new Pagination();
			$pagination->total = $total_orders;
			$pagination->page = $page;
			$pagination->limit = $this->config->get('config_limit_admin');
			$pagination->url = $this->url->link('purchase/pending_orders', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);
			
			$data['pagination'] = $pagination->render();
			$data['results'] = sprintf($this->language->get('text_pagination'), ($total_orders) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($total_orders - $this->config->get('config_limit_admin'))) ? $total_orders : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $total_orders, ceil($total_orders / $this->config->get('config_limit_admin')));

			$this->response->setOutput($this->load->view('purchase/pending_orders.tpl', $data));
		}
	}
?>