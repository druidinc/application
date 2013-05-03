<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Github extends Controller{
		public function main (){
			exec('git pull https://github.com/Web-Project/jca.git master');  
		}
	}
?>