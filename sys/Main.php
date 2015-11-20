<?php

require 'sys/request.php';

class Main{

	static function init(){
		// recuperar la request
		echo $_SERVER['REQUEST_URI'];
		// extract all the components un URI
		Request::retrieve();
		/*$controller=Request::getCont();
		$action=Request::getAct();
		$params=Request::getParams();*/
	}

}

?>