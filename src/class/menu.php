<?php
require_once("option.php");

class Menu{

	static function printOptions($axn){
		$options = Option::getMainOptions();
		if($options){
			echo("<nav class=\"menu\">");
			Menu::printChildrenOptions($options, $axn);
			echo("</nav>");
		}
	}
	static function printChildrenOptions($options, $axn){
		if ($options){
			echo("<ul>");			
			foreach ($options as $option){
				echo "<li>";	
				if(($axn == null && $option->action == 'inicio') || $axn == $option->action){
					echo "<a href=\"".urldecode($option->reference)."\"  class=\"selected\">". mb_strtoupper(urldecode($option->name), 'UTF-8') ."</a>";
				}else{
					echo "<a href=\"".urldecode($option->reference)."\"  class=\"".$option->open."\">". mb_strtoupper(urldecode($option->name), 'UTF-8') ."</a>";
				}
				Menu::printChildrenOptions($option->getChildren(), $axn);
				echo "</li>";
			}
			echo("</ul>");
		}
	}
}
?>