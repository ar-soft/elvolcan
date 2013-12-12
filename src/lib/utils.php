<?php

function renderLayoutWithView($contentLayout, $contentView, $variables = array()){
	$contentLayoutFullPath = LAYOUT_PATH . "/" . $contentLayout . ".php";
	$contentViewFullPath = VIEW_PATH . "/" . $contentView . ".php";
	if (count($variables) > 0) {
		foreach ($variables as $key => $value) {
			if (strlen($key) > 0) {
				${$key} = $value;
			}
		}
	}
	$body_path = $contentViewFullPath;
	
	if (file_exists($contentLayoutFullPath)) {
		require_once($contentLayoutFullPath);
	} else {
		//require_once(TEMPLATES_PATH . "/error.php");
		echo "ERROR";
	}
}
function viewExists($view){
	$contentViewFullPath = VIEW_PATH . "/" . $view . ".php";

	if (file_exists($contentViewFullPath)) {
		return true;
	} else {
		return false;
	}
}
?>