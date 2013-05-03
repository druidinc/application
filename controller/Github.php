<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Github extends Controller{
		public function main (){
			exec('git pull https://github.com/jca-bookkeeping-services/application.git master'); 
		}
	}
?>