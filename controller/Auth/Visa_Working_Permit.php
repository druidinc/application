<?php

	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Visa_Working_Permit extends Controller { 
		public function main(){
			if(!isset($this->session->sessionData['user_id']) || $this->session->sessionData['type'] != 1)
				$this->load->controller('Auth/Login');

			$visa = $this->load->model('Admin/Visa_Working_Permit_Model');

			$view_data = array();
			$action = 'add';

			$view_data['title'] = 'JCA Visa & Working Permit';
			$view_data['action'] = $action;
			$view_data['visa_working_permit'] = $visa->getVisaWorkingPermit();

			$this->load->view('Auth/Visa_Working_Permit',$view_data);	
		}

		public function editVisaWorkingPermit(){
			if(!isset($this->session->sessionData['user_id']) || $this->session->sessionData['type'] != 1)
				$this->load->controller('Auth/Login');

			$visa = $this->load->model('Admin/Visa_Working_Permit_Model');

			$id = '';

			if($this->validateGetField('id',$this->uri->get))
				$id = $this->uri->get['id'];

			$view_data = array();
			$action = 'add';

			$view_data['title'] = 'JCA Visa & Working Permit';
			$view_data['action'] = $action;
			$view_data['id'] = $id;
			$view_data['visa_working_permit'] = $visa->getVisaWorkingPermit();


			$validateField = array(
				array('name' => 'name', 'label' => 'Name', 'validation' => 'required'),
				array('name' => 'display_text', 'label' => 'Display Text', 'validation' => 'required'),
				array('name' => 'content', 'label' => 'Content', 'validation' => 'required'),
			);

			if($this->form->validate($validateField)){
				if(!$visa->isVisaExit($this->form->post['name'],$id)) {
					$visa->updateVisa($this->form->post, $id);
				} else {
					$this->form->errors = array($this->form->post['name'] . ' already exists.');
				}
			}


			$visaResult = $visa->getVisaWorkingPermitById($id);

			$view_data['name'] = $visaResult['name'];
			$view_data['display_text'] = $visaResult['display_text'];
			$view_data['content'] = $visaResult['content'];

			$this->load->view('Auth/Visa_Working_Permit',$view_data);	
		}
	}
?>