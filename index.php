<?php
	session_start();
	require_once(realpath(dirname(__FILE__)."/config.php"));
	require_once(LIB_PATH."/utils.php");

	$axn =  isset( $_GET['axn'] ) ? $_GET['axn'] : null;
	
	if(viewExists($axn)){
		renderLayoutWithView("layout", $axn, array('axn' => $axn));
	}else{
		renderLayoutWithView("layout", "home", array('axn' => null));
	}
?>