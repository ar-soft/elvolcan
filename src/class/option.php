<?php
class Option{
	var $id;
	var $name;
	var $reference;
	var $parent_id;
	var $action;
	var $open;
	
	static function getMainOptions(){
		mysql_connect('localhost','m6000251_admin','Elvolcan1234');
        mysql_select_db('m6000251_hotelelvolcan');
		
		$result = mysql_query ("SELECT * FROM menu_options where parent_id is null");
		
		$optionsList = array();
		for ($i = 0; $row = mysql_fetch_array ($result) ; $i++) {
			$option = new Option();
			$option->id= $row["id"];
			$option->name= $row["name"];
			$option->reference= $row["reference"];
			$option->parent_id= $row["parent_id"];
			$option->action= $row["action"];
			$option->open= $row["open"];
			
			$optionsList[$i]= $option;
		}
		mysql_close();
		
		return $optionsList;
	}
	
	function getChildren(){
		mysql_connect('localhost','m6000251_admin','Elvolcan1234');
        mysql_select_db('m6000251_hotelelvolcan');
	
		$result = mysql_query ("SELECT * FROM menu_options where parent_id='$this->id'");
	
		$optionsList = array();
		for ($i = 0; $row = mysql_fetch_array ($result) ; $i++) {
			$option = new Option();
			$option->id= $row["id"];
			$option->name= $row["name"];
			$option->reference= $row["reference"];
			$option->parent_id= $row["parent_id"];
			$option->action= $row["action"];
			$option->open= $row["open"];
	
			$optionsList[$i]= $option;
		}
		mysql_close();
	
		return $optionsList;
	}
}
?>