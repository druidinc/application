<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Services extends Controller {

		private $services;
		private $pages;

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

			$this->load->view("Services2", $view_data);
		}	
	}
?>