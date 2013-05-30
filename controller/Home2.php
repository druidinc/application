<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Home2 extends Controller{

		private $_pages;
		private $_services;


		public function main(){

			//get the models
			$this->_pages = $this->load->model('Admin/Pages_Model');
			$this->_services = $this->load->model('Admin/Services_Model');

			$pageData = $this->_pages->getPage('d',1);

			$view_data = array(
				"page" => "home",
				"title" => "JCA Bookkeeping Services"
			);

			foreach ($pageData as $data) {
				$contents = json_decode($data['content']);

				foreach ($contents->content as $content) {
					$view_data['mission'] = $content->mission;
					$view_data['vision'] = $content->vision;
				}
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

			$view_data['services'] = $this->_services->getAllServices();

			
			$this->load->view("Home2", $view_data);
		}
	}
?>