<?php
	class Visa_Working_Permit_Model extends Model {
		public function getVisaWorkingPermit(){
			$query = '
				SELECT 	id,
						display_text
				FROM 	visa_work_permit
				WHERE 	active  = 1
			';

			$result = $this->db->query($query);

			return $result;
		}

		public function getVisaWorkingPermitById($id){
			$query = '
				SELECT 	name,
						display_text,
						content
				FROM 	visa_work_permit
				WHERE 	active = 1
				AND 	id = :id					
			';

			$bindParam = array(
				array('bind_param' => ':id', 'value' => $id, 'type' => PDO::PARAM_INT),
			);

			$results = $this->db->query($query,$bindParam);

			foreach ($results as $result) {
				return $result;
			}
		}

		public function getVisaWorkingPermitByName($name){
			$query = '
				SELECT 	name,
						display_text,
						content
				FROM 	visa_work_permit
				WHERE 	active = 1
				AND 	name = :name					
			';

			$bindParam = array(
				array('bind_param' => ':name', 'value' => $name, 'type' => PDO::PARAM_STR),
			);

			$results = $this->db->query($query,$bindParam);

			foreach ($results as $result) {
				return $result;
			}
		}

		public function isVisaExit($name,$id){

			$query = '
				SELECT 	id
				FROM 	visa_work_permit
				WHERE 	active = 1
				AND 	name = :name					
			';

			$bindParam = array(
				array('bind_param' => ':name', 'value' => $name, 'type' => PDO::PARAM_STR),
			);

			$results = $this->db->query($query,$bindParam);

			if(count($results)) {
				foreach ($results as $result) {
					if($result['id'] == $id)
						return false;
				}
			} else {
				return false;
			}

			return true;
		}

		public function updateVisa($postData, $id){

			$data = array();

			$data['name'] = ':name';
			$data['display_text'] = ':display_text';
			$data['content'] = ':content';

			$whereClause = '	active = 1 AND id = :id';

			$bindParam = array(
				array('bind_param' => ':name', 'value' => $postData['name'], 'type' => PDO::PARAM_STR),
				array('bind_param' => ':display_text', 'value' => $postData['display_text'], 'type' => PDO::PARAM_STR),
				array('bind_param' => ':content', 'value' => $postData['content'], 'type' => PDO::PARAM_STR),
				array('bind_param' => ':id', 'value' => $id, 'type' => PDO::PARAM_INT),
			);

			$this->db->update('visa_work_permit',$data, $whereClause, $bindParam);
		}
	}
?>