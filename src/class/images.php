<?php

class Images{

	var $id;
	var $url;
	var $position;
	var $date_created;

	static function printImages(){
		$images = Images::getImages();
		echo("<div>");
		foreach ($images as $image){
			if($image->position == 1){
				echo "<img class=\"background\" src=\"$image->url\" id=\"$image->position\" style=\"display:inline\">";
			}else{
				echo "<img class=\"background\" src=\"$image->url\" id=\"$image->position\" style=\"display:none\">";
			}
			
		}
		echo("</div>");
	}

	static function getImages(){

		mysql_connect('localhost','m6000251_admin','Elvolcan1234');
        mysql_select_db('m6000251_hotelelvolcan');
		
		$result = mysql_query ("SELECT * FROM images order by date_created desc");

		$newList = array();
		for ($i = 0; $row = mysql_fetch_array ($result) ; $i++) {
			$new = new Images();
			$new->id= $row["id"];
			$new->url= $row["url"];
			$new->position= $row["position"];
			$new->date_created= $row["date_created"];
			
			$newList[$i]= $new;
		}
		mysql_close();
		
		return $newList;

	}
}
?>