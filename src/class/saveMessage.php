<?php 

	class Message{
		
		static function saveMessage($nombre, $email, $asunto, $mensaje){
			
			mysql_connect('localhost','elvolcan','Elvolcan123');
        	mysql_select_db('hotelelvolcan');
			
			$result = mysql_query ("INSERT INTO message (name,email,asunt,message,date_created) VALUES ('$nombre','$email','$asunto','$mensaje',NOW())");
			
			mysql_close();
			
		}
		
	}

?>
