<?php
	session_start();
	require_once(realpath(dirname(__FILE__)."/config.php"));
	require_once(LIB_PATH."/utils.php");
	//require_once(CLASS_PATH."/session.php");
	//$session = new Session();

//	$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//
//	$path = basename($url).PHP_EOL;
//		 
	$axn =  isset( $_GET['axn'] ) ? $_GET['axn'] : null;
	
	if(viewExists($axn)){
		renderLayoutWithView("layout", $axn, array('axn' => $axn));
	}else{
		renderLayoutWithView("layout", "home", array('axn' => $axn));
	}
?>