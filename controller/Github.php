<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Github extends Controller{
		public function main (){
			exec('git pull https://github.com/Web-Project/jca.git master'); 
		}

		public function application(){
			chdir('application');
			exec('git pull https://github.com/jca-bookkeeping-services/application.git master'); 
			chdir('../');
		}

		public function framework(){ 
			chdir('framework');
			exec('git pull https://github.com/druidinc/framework.git master');  	
			chdir('../');
		}
	}
?>