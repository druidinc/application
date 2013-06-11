<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Clients extends Controller{

		private $services;
		private $pages;
		private $products;

		public function main(){
			$this->services = $this->load->model('Admin/Services_Model');
			$this->pages = $this->load->model('Admin/Pages_Model');
			$this->products = $this->load->model('Admin/Sage_Model');
			$clients = $this->load->model('Admin/Clients_Model');

			
			$view_data = array(
				"page" => "clients",
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
			$view_data['implementations'] = $this->products->getClients();
			$view_data['clients'] = $clients->getClients();

			$this->load->view('Clients',$view_data);
		}
	}
?>