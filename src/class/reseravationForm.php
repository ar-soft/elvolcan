<?php

	require_once("sendReservation.php");
	
			$nombre = $_POST["name"];
			$telephone = $_POST["phone"]
			$email = $_POST["email"];
			$dni = $_POST["dni"]
			$suite = $_POST["suite"];
			$in = $_POST["in"];
			$out = $_POST["out"];
			$kids = $_POST["kids"];
			$adults = $_POST["adult"];
			
			if($_POST["name"] != null && $_POST["name"] != ""){
				
				Reservation::sendReservation($nombre, $telephone, $email, $dni, $suite, $in, $out, $kids, $adults);
				
			}

			?>
