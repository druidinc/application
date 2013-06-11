<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Implementations extends Controller {
		public function main(){
			$cat_id = null;
			$subcat_id = null;

			$this->services = $this->load->model('Admin/Services_Model');
			$this->_pages = $this->load->model('Admin/Pages_Model');
			$this->products = $this->load->model('Admin/Sage_Model');

			$view_data = array(
				"page" => "products",
				"title" => "JCA Bookkeeping Services"
			);

			$view_data['services'] = $this->services->getServices();
			$view_data['service'] = array(array("subcat_name" => 'Peachtree (Sage 50)'));
			$view_data['implementations'] = $this->products->getClientsOnly();


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

			$this->load->view("Implementations", $view_data);
		}
	}
?>