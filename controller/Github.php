<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Github extends Controller{
		public function main (){
			exec('git pull https://github.com/Web-Project/jca.git master'); 
		}

		public function application(){
			exec('cd application'); 
			exec('git pull https://github.com/jca-bookkeeping-services/application.git master'); 
			exec('cd ../');  	
		}

		public function framework(){
			exec('cd framework'); 
			exec('git pull https://github.com/jca-bookkeeping-services/framework.git master');  	
			exec('cd ../');  	
		}
	}
?>