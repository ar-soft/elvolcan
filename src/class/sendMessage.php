<?php

	require_once("saveMessage.php");
	
			$nombre = $_POST["name"];
			$email = $_POST["email"];
			$asunto = $_POST["subject"];
			$mensaje = $_POST["comment"];
			
			if($_POST["name"] != null && $_POST["name"] != ""){
				
				Message::saveMessage($nombre, $email, $asunto, $mensaje);
				
				$asunto = "Mensaje a través de contacto Hotel El Volcán";
					
				$cuerpo = "$mensaje";
	
				//para el envío en formato HTML
				//$headers = "MIME-Version: 1.0\r\n";
				//$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	
				//dirección del remitente
				$headers .= "From:$email\r\n";
	
				//dirección de respuesta, si queremos que sea distinta que la del remitente
				//$headers .= "Reply-To: contacto@juventudcfederal.com.ar\r\n";
	
				//ruta del mensaje desde origen a destino
				//$headers .= "Return-path: holahola@desarrolloweb.com\r\n";	
	
				//direcciones que recibirán copia oculta
				$headers .= "Bcc: alcarazrodrigoh@gmail.com\r\n"; 
	
				mail("contacto@hotelelvolcancom.ar",$asunto,$cuerpo,$headers);
				
				header( 'Location: http://localhost/index.php?axn=success' ) ;
				
			}

			?>
