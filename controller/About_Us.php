<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class About_Us extends Controller{
		public function main(){
			$this->services = $this->load->model('Admin/Services_Model');
			$this->pages = $this->load->model('Admin/Pages_Model');

			
			$view_data = array(
				"page" => "home",
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

			$this->load->view('About_Us',$view_data);
		}
	}
?>