<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Github extends Controller{
		public function main (){
			exec('git pull https://github.com/Web-Project/jca.git master'); 
		}

		public function application(){
			exec('git pull https://github.com/jca-bookkeeping-services/application.git master');  	
		}

		public function framework(){
			exec('git pull https://github.com/jca-bookkeeping-services/framework.git master');  	
		}
	}
?>