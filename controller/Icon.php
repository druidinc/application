<?php
	if(!defined('SERVER_ROOT'))
		die ('Unauthorized access. File forbidden.');

	class Icon extends Controller {

		public function main() {
			echo "favicon.ico";
		}	
	}
?>