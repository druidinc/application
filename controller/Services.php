<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Services extends Controller {

		private $services;
		private $pages;
		private $products;

		public function main() {

			$cat_id = null;
			$subcat_id = null;

			$this->services = $this->load->model('Admin/Services_Model');
			$this->_pages = $this->load->model('Admin/Pages_Model');

			$view_data = array(
				"page" => "services",
				"title" => "JCA Bookkeeping Services"
			);

			$view_data['services'] = $this->services->getServices();
			$view_data['all_services'] = $this->services->getAllServices();

			$pageData = $this->_pages->getPage('d',3);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['contact_company_name'] = $content->company_name;
					$view_data['contact_address'] = $content->address;
					$view_data['contact_email'] = $content->email;
					$view_data['contact_contacts'] = $content->contacts;
				}
			}

			$this->load->view("Services", $view_data);
		}	

		public function service(){
			$cat_id = null;
			$subcat_id = null;

			if(count($this->uri->get) && array_key_exists('cid', $this->uri->get) && strlen(trim($this->uri->get['cid'])))
				$cat_id = $this->uri->get['cid'];
			if(count($this->uri->get) && array_key_exists('scid', $this->uri->get) && strlen(trim($this->uri->get['scid'])))
				$subcat_id = $this->uri->get['scid'];


			$this->services = $this->load->model('Admin/Services_Model');
			
			$view_data = array(
				"page" => "services",
				"title" => "JCA Bookkeeping Services"
			);

			$view_data['services'] = $this->services->getServices();
			$view_data['service'] = $this->services->getService($cat_id,$subcat_id);
			$view_data['cat_id'] = $cat_id;
			$view_data['subcat_id'] = $subcat_id;

			$this->pages = $this->load->model('Admin/Pages_Model');

			$pageData = $this->pages->getPage('d',3);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['contact_company_name'] = $content->company_name;
					$view_data['contact_address'] = $content->address;
					$view_data['contact_email'] = $content->email;
					$view_data['contact_contacts'] = $content->contacts;
				}
			}	

			$this->load->view('Service',$view_data);
		}

		public function sageProducts(){
			$cat_id = null;
			$subcat_id = null;

			$this->services = $this->load->model('Admin/Services_Model');
			$this->_pages = $this->load->model('Admin/Pages_Model');
			$this->products = $this->load->model('Admin/Sage_Model');

			$view_data = array(
				"page" => "services",
				"title" => "JCA Bookkeeping Services"
			);

			$view_data['services'] = $this->services->getServices();
			$view_data['all_services'] = $this->services->getAllServices();
			$view_data['products'] = $this->products->getProducts();

			foreach ($view_data['products'] as &$product) {
				$product['price'] = number_format ($product['price'] ,2 );
			}

			$pageData = $this->_pages->getPage('d',3);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['contact_company_name'] = $content->company_name;
					$view_data['contact_address'] = $content->address;
					$view_data['contact_email'] = $content->email;
					$view_data['contact_contacts'] = $content->contacts;
				}
			}

			$this->load->view("Sage_Products", $view_data);
		}

		public function sageProduct(){
			$id = '';
			$prod = array();

			if(count($this->uri->get) && array_key_exists('id', $this->uri->get) && strlen(trim($this->uri->get['id'])))
				$id = $this->uri->get['id'];

			$this->products = $this->load->model('Admin/Sage_Model');
			$this->services = $this->load->model('Admin/Services_Model');
			$this->pages = $this->load->model('Admin/Pages_Model');

			$view_data = array(
				"page" => "services",
				"title" => "JCA Bookkeeping Services"
			);

			$view_data['services'] = $this->services->getServices();
			$prod[] = $this->products->getProduct($id);
			$view_data['products'] = $prod;	

			foreach ($view_data['products'] as &$product) {
				$product['price'] = number_format ($product['price'] ,2 );
			}

			$pageData = $this->pages->getPage('d',3);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['contact_company_name'] = $content->company_name;
					$view_data['contact_address'] = $content->address;
					$view_data['contact_email'] = $content->email;
					$view_data['contact_contacts'] = $content->contacts;
				}
			}


			$this->load->view('Sage_Product',$view_data);
		}

		public function sageInquiry(){
			$id = '';
			$prod = array();

			if(count($this->uri->get) && array_key_exists('id', $this->uri->get) && strlen(trim($this->uri->get['id'])))
				$id = $this->uri->get['id'];

			$this->products = $this->load->model('Admin/Sage_Model');
			$inquiry = $this->load->model('Inquiry_Model');
			$this->services = $this->load->model('Admin/Services_Model');
			$this->pages = $this->load->model('Admin/Pages_Model');

			$view_data = array(
				"page" => "services",
				"title" => "JCA Bookkeeping Services"
			);

			$view_data['services'] = $this->services->getServices();

			$sessData = $this->session->sessionData;
			$inquire_id = array();

			$pageData = $this->pages->getPage('d',3);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['contact_company_name'] = $content->company_name;
					$view_data['contact_address'] = $content->address;
					$view_data['contact_email'] = $content->email;
					$view_data['contact_contacts'] = $content->contacts;
				}
			}

			if(array_key_exists('inquire_id', $sessData)) {
				$inquire_id = $sessData['inquire_id'];
				if(!in_array($id, $inquire_id) && !empty($id)){
					$inquire_id[] = $id;
				} else {
				}
			} else {
				if(!empty($id))
					$inquire_id[] = $id;
			}

			//$inquire_id = array();

			$this->session->sessionData = array('inquire_id'=>$inquire_id);
			//print_r($this->session->sessionData['inquire_id']);
			//print_r($inquire_id);

			foreach ($inquire_id as $value) {
				$prod[] = $this->products->getProduct($value);
			}
			
			$view_data['products'] = $prod;	

			foreach ($view_data['products'] as &$product) {
				$product['price'] = number_format ($product['price'] ,2 );
			}

			$view_data['err'] = '';

			$validateFields = array(
				array('name' => 'firstname', 'label' => 'First Name', 'validation' => 'required'),
				array('name' => 'lastname', 'label' => 'Last Name', 'validation' => 'required'),
				array('name' => 'address', 'label' => 'Address', 'validation' => 'required'),
				array('name' => 'email', 'label' => 'Email', 'validation' => 'required|filter=email'),
				array('name' => 'phone', 'label' => 'Phone', 'validation' => 'required'),
				array('name' => 'message', 'label' => 'Message / Comment', 'validation' => 'required'),
			);

			if(count($this->form->post)) {
				if($this->form->validate($validateFields)) {
					$inquiry->addClientEmailProductInquiry($this->form->post);
					$this->tools->email = new Email;

					$this->sendEmail($this->form->post,'sage_products');
					
				} else {
					$view_data['err'] = 'error';
				}
			}
			

			$this->load->view('Sage_Inquiry',$view_data);
		}

		public function downloadBusinessRegistrationForm(){
			header('Content-type: application/pdf');

			// It will be called downloaded.pdf
			header('Content-Disposition: attachment; filename="Business Registration.pdf"');

			// The PDF source is in original.pdf
			readfile($this->assets . '/Business Registration Form.pdf');
		}

		private function sendEmail($postData,$type = ''){

			$message = '';

			$this->tools->email = new Email;

			$this->tools->email->from = $postData['firstname'] . ' ' . $postData['lastname'] . ' <' . $postData['email'] . '> ';
			$this->tools->email->to = 'JCA Bookkeeping Services <jcabookkeeping@yahoo.com>;Egee Boy Gutierrez <egeeboygutierrez91@gmail.com> ';
			$this->tools->email->subject = $postData['subject'];


			if(!empty($type)) {
				switch ($type) {
					case 'sage_products':
						$message = '
							<html>
								<head>
									<title>Samole</title>

									
								</head>

						';
						$inquire_id = $this->session->sessionData['inquire_id'];

						$message .= '
							<body  style="font-family: "Open Sans",Calibri,Candara,Arial,sans-serif; margin: 0px auto; padding: 0px; margin: 0 auto; background: #FFFFF; color: #666; font-size: 15px; line-height: 25px; font-weight: 400;">								
								<div class="product_box" style="margin-left:10px; padding-top: 10px; padding-bottom: 10px;">
						';

						foreach ($inquire_id as $value) {

							$prod = $this->products->getProduct($value);

							$message .= '
								<p style="margin: 2px 0px;">These are the products that are inquired by ' . $postData['firstname'] . ' ' . $postData['lastname'] . '</p>
								<p style="margin: 2px 0px;">&nbsp;</p>
								<h4 style="font-size: 24px; line-height: 35px; font-family: "Open Sans", sans-serif; font-weight: normal !important; margin: 2px 0px 5px 0px; padding: 2px 0px; text-rendering: optimizelegibility; text-align: left; font-weight: 400 !important;">' . $prod['name'] . '</h4>
					            <div class="product_details" style="height: 100%;">
					                <table style="text-align: left; margin-left: 0px;">
					                    <tr >
					                        <td rowspan="2"><img style="width: 75px; height: 94px;" src="' . $this->base_url . $this->image_resource . '/' . str_replace('+', '%20', urlencode($prod['image']))  . '"></td>
					                        <td class="label" style="padding-left: 20px !important; padding-top: 10px; font-size: 18px;">' . $prod['brief_description'] . '</td>
					                    </tr>
					                    <tr>
					                        <td class="label price" style="padding-left: 20px !important; padding-top: 10px; font-size: 18px; vertical-align: bottom; font-size: 23px;">Price: Php ' . $prod['price'] . '</td>
					                    </tr>
					                </table>
					            </div>
					            <p style="margin: 2px 0px;">&nbsp;</p>            					
							';
							
						}

						$message .= '
								<p style="margin: 2px 0px;">' . $postData['message'] . '</p>
								</div> 
							</body>
						</html>
						';


						break;
					
					default:
						
						break;
				}
			} else {
				$message = '
					<html>
						<head>
							<title>Inquiry</title>						
						</head>
						<body style="font-family: "Open Sans",Calibri,Candara,Arial,sans-serif; margin: 0px auto; padding: 0px; margin: 0 auto; background: #FFFFF; color: #666; font-size: 15px; line-height: 25px; font-weight: 400;">
							<p style="margin: 2px 0px;">' . $postData['message'] . '</p>
						</body>
					</html>
				';
			}

			$this->tools->email->message = $message; 

			$this->tools->email->send();
		}
	}
?>