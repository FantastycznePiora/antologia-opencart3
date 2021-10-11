<?php
	class ControllerPurchaseStockReport extends Controller {
		public function index() {
			$this->load->language('purchase/stock_report');
			$data['heading_title'] = $this->language->get('heading_title');
			$data['text_list'] = $this->language->get('text_list');
			
			//columns
			$data['column_product_name'] = $this->language->get('column_product_name');
			$data['column_quantity'] = $this->language->get('column_quantity');
			
			//buttons
			$data['button_export'] = $this->language->get('button_export');
			
			$url = '';
			
			//breadcrumbs
			$data['breadcrumbs'] = array();
			
			$data['breadcrumbs'][] = array(
				'text' => "Home",
				'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
			);

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('purchase/stock_report', 'token=' . $this->session->data['token'] . $url, true)
			);
			
			if (isset($this->request->get['page'])) {
				$page = $this->request->get['page'];
			} else {
				$page = 1;
			}
			
			$start = ($page - 1) * 5;
			$limit = 5;
			
			$filter_data = array(
				'start' => $start,
				'limit' => $limit
			);
			
			$data['token'] = $this->session->data['token'];
			
			$this->load->model('purchase/stock_report');
			$stock_total = $this->model_purchase_stock_report->getTotalStock();
			$data['stock_details'] = $this->model_purchase_stock_report->getStockDetails($filter_data);
			
			//if export button is pressed
			if (isset($this->request->get['export'])) {
				$data['company_name'] = $this->config->get('config_name'); 
				$data['company_title'] = $this->config->get('config_title'); 
				$data['company_owner'] = $this->config->get('config_owner'); 
				$data['company_email'] = $this->config->get('config_email');
				$data['company_address'] = $this->config->get('config_address');
			
				$html = $this->load->view('purchase/print_stock_report.tpl',$data);
			
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
			
			$pagination = new Pagination();
			$pagination->total = $stock_total;
			$pagination->page = $page;
			//$pagination->limit = $this->config->get('config_limit_admin');
			$pagination->limit = 5;
			$pagination->url = $this->url->link('purchase/stock_report', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);
			
			$data['pagination'] = $pagination->render();
			$data['results'] = sprintf($this->language->get('text_pagination'), ($stock_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($stock_total - $this->config->get('config_limit_admin'))) ? $stock_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $stock_total, ceil($stock_total / $this->config->get('config_limit_admin')));
			
			$data['header'] = $this->load->controller('common/header');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');
			
			$this->response->setOutput($this->load->view('purchase/stock_report.tpl',$data));
		}
		
		public function stockInout()
		{
			$this->load->language('purchase/stock_report');
			$data['inout_heading_title'] = $this->language->get('inout_heading_title');
			$data['inout_text_list'] = $this->language->get('inout_text_list');
			
			//columns
			$data['column_product_name'] = $this->language->get('column_product_name');
			$data['column_date'] = $this->language->get('column_date');
			$data['column_instock'] = $this->language->get('column_instock');
			$data['column_outstock'] = $this->language->get('column_outstock');
			
			//entry
			$data['entry_date_start'] = $this->language->get('entry_date_start');
			$data['entry_date_end'] = $this->language->get('entry_date_end');
			$data['entry_product'] = $this->language->get('entry_product');
			
			//button
			$data['button_filter'] = $this->language->get('button_filter');
			$data['button_clear'] = $this->language->get('button_clear');
			$data['inout_export_button'] = $this->language->get('inout_export_button');
			$url = '';
			//breadcrumbs
			$data['breadcrumbs'] = array();
			
			$data['breadcrumbs'][] = array(
				'text' => "Home",
				'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
			);

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('inout_heading_title'),
				'href' => $this->url->link('purchase/stock_report', 'token=' . $this->session->data['token'] . $url, true)
			);
			$data['token'] = $this->session->data['token'];
			
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
			
			if (isset($this->request->get['product'])) {
				$product = $this->request->get['product'];
			} else {
				$product = null;
			}

			if (isset($this->request->get['page'])) {
				$page = $this->request->get['page'];
			} else {
				$page = 1;
			}

			$start = ($page - 1) * 20;
			$limit = 20;
			
			$filter_data = array(
				'date_start' => $date_start,
				'date_end' => $date_end,
				'product' => $product,
				'start' => $start,
				'limit' => $limit
			);
			
			$data['date_start'] = $date_start;
			$data['date_end'] = $date_end;
			$data['fproduct'] = $product;
			
			$this->load->model('catalog/product');
			$products = array();
			$products = $this->model_catalog_product->getProducts($products);
			
			foreach ($products as $product) {
				$data['products'][] = $product['name'];
			}
			
			//getting inout details from model
			$this->load->model('purchase/stock_report');
			$inout_total = $this->model_purchase_stock_report->getTotalInout($filter_data);
			$inout_details = $this->model_purchase_stock_report->getInoutDetails($filter_data);
			
			
			foreach ($inout_details as $key => $inout_detail) {
				if (!isset($inout_detail['pquantities'])) {
					$inout_details[$key]['pquantities'] = null;
				}
				
				if (!isset($inout_detail['squantities'])) {
					$inout_details[$key]['squantities'] = null;
				}
				
			}
			$data['inout_details'] = $inout_details;
			
			//if export button is pressed
			if (isset($this->request->get['export'])) {
				$data['company_name'] = $this->config->get('config_name'); 
				$data['company_title'] = $this->config->get('config_title'); 
				$data['company_owner'] = $this->config->get('config_owner'); 
				$data['company_email'] = $this->config->get('config_email');
				$data['company_address'] = $this->config->get('config_address');
			
				$html = $this->load->view('purchase/print_stock_inout_report.tpl',$data);
			
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
			
			
			$pagination = new Pagination();
			$pagination->total = $inout_total;
			$pagination->page = $page;
			$pagination->limit = $this->config->get('config_limit_admin');
			$pagination->url = $this->url->link('purchase/stock_report/stockInout', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);
			
			$data['pagination'] = $pagination->render();
			$data['results'] = sprintf($this->language->get('text_pagination'), ($inout_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($inout_total - $this->config->get('config_limit_admin'))) ? $inout_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $inout_total, ceil($inout_total / $this->config->get('config_limit_admin')));
			
			
			$data['header'] = $this->load->controller('common/header');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');
			
			$this->response->setOutput($this->load->view('purchase/stock_inout_report.tpl',$data));
		}
		
		public function view_inout_details($detail)
		{
			$this->load->language('purchase/stock_report');
			$data['out_heading_title'] = $this->language->get('out_heading_title');
			$data['in_heading_title'] = $this->language->get('in_heading_title');
			$data['column_date'] = $this->language->get('column_date');
			$data['column_outstock'] = $this->language->get('column_outstock');
			$data['column_instock'] = $this->language->get('column_instock');
			
			$this->load->model('purchase/stock_report');
			$data['details'] = $this->model_purchase_stock_report->view_inout_details($detail);
			
			$data['company_name'] = $this->config->get('config_name'); // store name
			$data['company_title'] = $this->config->get('config_title'); // store title
			$data['company_owner'] = $this->config->get('config_owner'); // store owner name
			$data['company_email'] = $this->config->get('config_email'); // store email
			$data['company_address'] = $this->config->get('config_address');//store address
				
				
			//$html = $this->load->view('purchase/print_stock_inout_details.tpl',$data);
			//$html = $this->load->view('purchase/print_stock_in_details.tpl',$data);
			
			//$html = $this->load->view('purchase/print_stock_in_details.tpl',$data);
			
			
			if($detail['report_bit'] == 1)
			{
				$html = $this->load->view('purchase/print_stock_inout_details.tpl',$data);
			}
			elseif($detail['report_bit'] == 2)
			{
				$html = $this->load->view('purchase/print_stock_in_details.tpl',$data);
			}
			elseif($detail['report_bit'] == 3)
			{
				$html = $this->load->view('purchase/print_stock_out_details.tpl',$data);
			}
			
			$base_url = HTTP_CATALOG;
				
			//new mPDF($mode, $format, $font_size, $font, $margin_left, $margin_right, $margin_top, $margin_bottom, $margin_header, $margin_footer, $orientation);
				
			$mpdf = new mPDF('c','A4','','' , 10 , 10 , 25 , 12 , 5 , 7); 
				
			$header = '<div class="header"><div class="logo"><img src="'.$base_url.'image/catalog/logo.png" /></div><div class="company"><h3>'.$data['company_name'].'</h3></div></div><hr />';
 
			$mpdf->SetHTMLHeader($header, 'O', false);
				
			$footer = '<div class="footer"><div class="address"><b>Adress: </b>'.$data['company_address'].'</div><div class="pageno">{PAGENO}</div></div>';
				
			$mpdf->SetHTMLFooter($footer);
				
			//$mpdf->setFooter($footer);
				
			$mpdf->SetDisplayMode('fullpage');	
 
			$mpdf->list_indent_first_level = 0;
 
			$mpdf->WriteHTML($html);
			
			$mpdf->Output(); /***page will redirect to generate report without
								executing the remaining code 
								(we don't need to execute that one)***/
		}
		public function dead_products()
		{
			$this->load->language('purchase/stock_report');
			
			$data['dead_heading_title'] = $this->language->get('dead_heading_title');
			$data['entry_date_start'] = $this->language->get('entry_date_start');
			$data['entry_date_end'] = $this->language->get('entry_date_end');
			$data['button_clear'] = $this->language->get('button_clear');
			$data['entry_dead_limit'] = $this->language->get('entry_dead_limit');
			
			
			//columns
			
			$data['column_product_name'] = $this->language->get('column_product_name');
			$data['column_stock_quantity'] = $this->language->get('column_stock_quantity');
			$data['column_sale_quantity'] = $this->language->get('column_sale_quantity');
			
			$url = '';
			
			$data['breadcrumbs'] = array();
			
			$data['breadcrumbs'][] = array(
				'text' => "Home",
				'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
			);

			$data['breadcrumbs'][] = array(
				'text' => $data['dead_heading_title'],
				'href' => $this->url->link('purchase/stock_report', 'token=' . $this->session->data['token'] . $url, true)
			);
			
			
			if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
			} else {
				$page = 1;
			}
			
			
			$this->load->model('purchase/stock_report');
			$data['dead_details'] = $this->model_purchase_stock_report->getDeadProducts();
			$total_dead_details = count($data['dead_details']);
			
			if(isset($this->request->post['filter_bit']))
			{
				$filter['date_start'] = $this->request->post['date_start'];
				$filter['date_end'] = $this->request->post['date_end'];
				
				if($filter['date_start'] != '' || $filter['date_end'] != '')
				{
					$data['dead_details'] = $this->model_purchase_stock_report->getDeadProducts($filter);
					$data['date_start'] = $filter['date_start'];
					$data['date_end'] = $filter['date_end'];
					if($this->request->post['dead_limit']!='')
					{
						$data['dead_limit'] = $this->request->post['dead_limit'];
					}
				}
				else
				{
					$data['dead_details'] = $this->model_purchase_stock_report->getDeadProducts();
					$data['date_start'] = '';
					$data['date_end'] = '';
					if($this->request->post['dead_limit']!='')
					{
						$data['dead_limit'] = $this->request->post['dead_limit'];
					}
				}
			}
			elseif(isset($this->request->post['export_bit']))
			{
				$filter['date_start'] = $this->request->post['date_start'];
				$filter['date_end'] = $this->request->post['date_end'];
				if($filter['date_start'] != '' || $filter['date_end'] != '')
				{
					$data['dead_details'] = $this->model_purchase_stock_report->getDeadProducts($filter);
					if($this->request->post['dead_limit']!='')
					{
						$data['dead_limit'] = $this->request->post['dead_limit'];
					}
				}
				else
				{
					$data['dead_details'] = $this->model_purchase_stock_report->getDeadProducts();
					if($this->request->post['dead_limit']!='')
					{
						$data['dead_limit'] = $this->request->post['dead_limit'];
					}
				}
				/*if($_POST['page_no'] > 1)
				{
					$omit = ($_POST['page_no'] * 20) - 20;
					$data['dead_details'] = array_slice ($data['dead_details'], $omit);
				}
				else
				{
					$data['dead_details'] = array_slice($data['dead_details'],0,20);
				}*/
				
				$data['company_name'] = $this->config->get('config_name'); // store name
				$data['company_title'] = $this->config->get('config_title'); // store title
				$data['company_owner'] = $this->config->get('config_owner'); // store owner name
				$data['company_email'] = $this->config->get('config_email'); // store email
				$data['company_address'] = $this->config->get('config_address');//store address
				
				
				$html = $this->load->view('purchase/print_dead_products_report.tpl',$data);
				
				$base_url = HTTP_CATALOG;
				
				//new mPDF($mode, $format, $font_size, $font, $margin_left, $margin_right, $margin_top, $margin_bottom, $margin_header, $margin_footer, $orientation);
					
				$mpdf = new mPDF('c','A4','','' , 10 , 10 , 25 , 12 , 5 , 7); 
					
				$header = '<div class="header"><div class="logo"><img src="'.$base_url.'image/catalog/logo.png" /></div><div class="company"><h3>'.$data['company_name'].'</h3></div></div><hr />';
	 
				$mpdf->SetHTMLHeader($header, 'O', false);
					
				$footer = '<div class="footer"><div class="address"><b>Adress: </b>'.$data['company_address'].'</div><div class="pageno">{PAGENO}</div></div>';
					
				$mpdf->SetHTMLFooter($footer);
					
				//$mpdf->setFooter($footer);
					
				$mpdf->SetDisplayMode('fullpage');	
	 
				$mpdf->list_indent_first_level = 0;
	 
				$mpdf->WriteHTML($html);
				
				$mpdf->Output(); /***page will redirect to generate report without
									executing the remaining code 
									(we don't need to execute that one)***/

			}
			
			if($page > 1)
			{
				$omit = ($page * 20) - 20;
				$data['dead_details'] = array_slice ($data['dead_details'], $omit);
				$data['page_no'] = $page;
			}
			else
			{
				$data['dead_details'] = array_slice($data['dead_details'],0,20);
				$data['page_no'] = $page;
			}
			
			/*pagination*/
			$pagination = new Pagination();
			$pagination->total = $total_dead_details;
			$pagination->page = $page;
			$pagination->limit = $this->config->get('config_limit_admin');
			$pagination->url = $this->url->link('purchase/stock_report/dead_products', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);
			
			$data['pagination'] = $pagination->render();
			
			$data['results'] = sprintf($this->language->get('text_pagination'), ($total_dead_details) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($total_dead_details - $this->config->get('config_limit_admin'))) ? $total_dead_details : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $total_dead_details, ceil($total_dead_details / $this->config->get('config_limit_admin')));

			$data['filter'] = $this->url->link('purchase/stock_report/dead_products', 'token=' . $this->session->data['token'] . $url, true);
			
			
			$data['header'] = $this->load->controller('common/header');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');
			
			$this->response->setOutput($this->load->view('purchase/dead_products_report.tpl',$data));
		}
		
		
		public function best_products()
		{
			$this->load->language('purchase/stock_report');
			
			$data['best_heading_title'] = $this->language->get('best_heading_title');
			$data['entry_date_start'] = $this->language->get('entry_date_start');
			$data['entry_date_end'] = $this->language->get('entry_date_end');
			$data['button_clear'] = $this->language->get('button_clear');
			$data['entry_best_limit'] = $this->language->get('entry_best_limit');
			
			
			//columns
			
			$data['column_product_name'] = $this->language->get('column_product_name');
			$data['column_stock_quantity'] = $this->language->get('column_stock_quantity');
			$data['column_sale_quantity'] = $this->language->get('column_sale_quantity');
			
			$url = '';
			
			$data['breadcrumbs'] = array();
			
			$data['breadcrumbs'][] = array(
				'text' => "Home",
				'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
			);

			$data['breadcrumbs'][] = array(
				'text' => $data['best_heading_title'],
				'href' => $this->url->link('purchase/stock_report', 'token=' . $this->session->data['token'] . $url, true)
			);
			
			
			if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
			} else {
				$page = 1;
			}
			
			$this->load->model('purchase/stock_report');
			$data['best_products'] = $this->model_purchase_stock_report->best_products();
			$total_best_details = count($data['best_products']);
			
			if(isset($this->request->post['filter_bit']))
			{
				$filter['date_start'] = $this->request->post['date_start'];
				$filter['date_end'] = $this->request->post['date_end'];
				
				if($filter['date_start'] != '' || $filter['date_end'] != '')
				{
					$data['best_products'] = $this->model_purchase_stock_report->best_products($filter);
					$data['date_start'] = $filter['date_start'];
					$data['date_end'] = $filter['date_end'];
					if($this->request->post['best_limit']!='')
					{
						$data['best_limit'] = $this->request->post['best_limit'];
					}
				}
				else
				{
					$data['best_products'] = $this->model_purchase_stock_report->best_products();
					$data['date_start'] = '';
					$data['date_end'] = '';
					if($this->request->post['best_limit']!='')
					{
						$data['best_limit'] = $this->request->post['best_limit'];
					}
				}
			}
			elseif(isset($this->request->post['export_bit']))
			{
				$filter['date_start'] = $this->request->post['date_start'];
				$filter['date_end'] = $this->request->post['date_end'];
				if($filter['date_start'] != '' || $filter['date_end'] != '')
				{
					$data['best_products'] = $this->model_purchase_stock_report->getDeadProducts($filter);
					if($this->request->post['best_limit']!='')
					{
						$data['best_limit'] = $this->request->post['best_limit'];
					}
				}
				else
				{
					$data['best_products'] = $this->model_purchase_stock_report->getDeadProducts();
					if($this->request->post['best_limit']!='')
					{
						$data['best_limit'] = $this->request->post['best_limit'];
					}
				}
				
				/*if($_POST['page_no'] > 1)
				{
					$omit = ($_POST['page_no'] * 20) - 20;
					$data['best_products'] = array_slice ($data['best_products'], $omit);
				}
				else
				{
					$data['best_products'] = array_slice($data['best_products'],0,20);
				}*/
				
				$data['company_name'] = $this->config->get('config_name'); // store name
				$data['company_title'] = $this->config->get('config_title'); // store title
				$data['company_owner'] = $this->config->get('config_owner'); // store owner name
				$data['company_email'] = $this->config->get('config_email'); // store email
				$data['company_address'] = $this->config->get('config_address');//store address
				
				
				$html = $this->load->view('purchase/print_best_products_report.tpl',$data);
				
				$base_url = HTTP_CATALOG;
				
				//new mPDF($mode, $format, $font_size, $font, $margin_left, $margin_right, $margin_top, $margin_bottom, $margin_header, $margin_footer, $orientation);
					
				$mpdf = new mPDF('c','A4','','' , 10 , 10 , 25 , 12 , 5 , 7); 
					
				$header = '<div class="header"><div class="logo"><img src="'.$base_url.'image/catalog/logo.png" /></div><div class="company"><h3>'.$data['company_name'].'</h3></div></div><hr />';
	 
				$mpdf->SetHTMLHeader($header, 'O', false);
					
				$footer = '<div class="footer"><div class="address"><b>Adress: </b>'.$data['company_address'].'</div><div class="pageno">{PAGENO}</div></div>';
					
				$mpdf->SetHTMLFooter($footer);
					
				//$mpdf->setFooter($footer);
					
				$mpdf->SetDisplayMode('fullpage');	
	 
				$mpdf->list_indent_first_level = 0;
	 
				$mpdf->WriteHTML($html);
				
				$mpdf->Output(); /***page will redirect to generate report without
									executing the remaining code 
									(we don't need to execute that one)***/

			}
			
			
			
			
			if($page > 1)
			{
				$omit = ($page * 20) - 20;
				$data['best_products'] = array_slice ($data['best_products'], $omit);
				$data['page_no'] = $page;
			}
			else
			{
				$data['best_products'] = array_slice($data['best_products'],0,20);
				$data['page_no'] = $page;
			}
			
			/*pagination*/
			$pagination = new Pagination();
			$pagination->total = $total_best_details;
			$pagination->page = $page;
			$pagination->limit = $this->config->get('config_limit_admin');
			$pagination->url = $this->url->link('purchase/stock_report/best_products', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);
			
			$data['pagination'] = $pagination->render();
			
			$data['results'] = sprintf($this->language->get('text_pagination'), ($total_best_details) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($total_best_details - $this->config->get('config_limit_admin'))) ? $total_best_details : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $total_best_details, ceil($total_best_details / $this->config->get('config_limit_admin')));

			$data['filter'] = $this->url->link('purchase/stock_report/best_products', 'token=' . $this->session->data['token'] . $url, true);
			
			
			$data['header'] = $this->load->controller('common/header');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');
			
			$this->response->setOutput($this->load->view('purchase/best_products_report.tpl',$data));
		}
	}
?>