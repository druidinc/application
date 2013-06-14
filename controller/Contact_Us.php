<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Contact_Us extends Controller{

		private $services;
		private $pages;

		public function main(){
			$this->services = $this->load->model('Admin/Services_Model');
			$this->pages = $this->load->model('Admin/Pages_Model');

			
			$view_data = array(
				"page" => "contact_us",
				"title" => "JCA Bookkeeping Services"
			);

			$pageData = $this->pages->getPage('d',2);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['content'] = $content->content;
				}
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

			$view_data['services'] = $this->services->getServices();


			$validateFields = array(
				array('name' => 'firstname', 'label' => 'First Name', 'validation' => 'required'),
				array('name' => 'lastname', 'label' => 'Last Name', 'validation' => 'required'),
				array('name' => 'address', 'label' => 'Address', 'validation' => 'required'),
				array('name' => 'email', 'label' => 'Email', 'validation' => 'required|filter=email'),
				array('name' => 'phone', 'label' => 'Phone', 'validation' => 'required'),
				array('name' => 'message', 'label' => 'Message', 'validation' => 'required'),
			);

			if(count($this->form->post)) {
				if($this->form->validate($validateFields)) {
					$inquiry = $this->load->model('Inquiry_Model');
					$inquiry->addClientEmailProductInquiry($this->form->post);

					$this->sendEmail($this->form->post);
					$this->sendSMS($this->form->post);
				}
			}

			$this->load->view('Contact_Us',$view_data);
		}

		private function sendSMS($postData,$type = ''){
			$this->tools->sms = new SMS;

			$from = "From: " . $postData['firstname'] . " " . $postData['lastname'] . "\r\nPhone: " . $postData['phone'];
			$subject = $postData['subject'];
			$message = '';

			$message .= $from . "\r\n" . "Subject: " . $subject . "\r\n\r\n";

			if(!empty($type)) {
				switch ($type) {
					case 'sage_products':

						$message .= "Products Inquire: \r\n\r\n";

						$inquire_id = $this->session->sessionData['inquire_id'];

						foreach ($inquire_id as $value) {

							$prod = $this->products->getProduct($value);

							$message .= $prod['name'] . " - " . $prod['price'] . "\r\n";
						}

						$message .= $postData['message'];
						break;
					default:
						
						break;
				}
			} else {
				$message .= $postData['message'];
			}

			if(strlen($message) > 160){
				$message = chunk_split($message,155,"{separator}");
				$chunkedMessage = explode("{separator}", $message);
				unset($chunkedMessage[count($chunkedMessage) - 1]);
			}


			$tos = array(
				"+639228411949", "+639328804892", "+639065711364", "+639184810292"
			);

			foreach ($tos as $to) {
				if(strlen($message) > 160){
					foreach ($chunkedMessage as $key => &$message) {
						$message = ($key + 1) . '/' . count($chunkedMessage) . " " . $message;

						$sms = $this->tools->sms->account->sms_messages->create( "+15702635740",  $to, $message );
					}
				} else {
					$sms = $this->tools->sms->account->sms_messages->create( "+15702635740",  $to, $message );
				}
			}		

			
		}

		private function sendEmail($postData,$type = ''){

			$message = '';

			$this->tools->email = new Email;

			$this->tools->email->from = $postData['firstname'] . ' ' . $postData['lastname'] . ' <' . $postData['email'] . '> ';
			$this->tools->email->to = 'JCA Bookkeeping Services <jcabookkeeping@yahoo.com>JCA Bookkeeping Services <jcabs2007@gmail.com>;Egee Boy Gutierrez <egeeboygutierrez91@gmail.com> ';
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