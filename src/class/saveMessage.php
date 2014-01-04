<?php 

	class Message{
		
		static function saveMessage($nombre, $email, $asunto, $mensaje){
			
			mysql_connect('localhost','m6000251_admin','Elvolcan1234');
        	mysql_select_db('m6000251_hotelelvolcan');
			
			$result = mysql_query ("INSERT INTO message (name,email,asunt,message,date_created) VALUES ('$nombre','$email','$asunto','$mensaje',NOW())");
			
			mysql_close();
			
		}
		
	}

?>
