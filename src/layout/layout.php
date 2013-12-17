<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="es">
<head>
	<meta charset="utf-8"/>
	
	<title>Hotel El Volcán</title>
	<link rel="stylesheet" type="text/css" href="/web-app/css/styles.css">
</head>
<body>
	<section class="content<?php if(!$axn): echo " home"; else: echo " $axn";endif;?>">
		<header>
			<div>
				<img id="logo" src="web-app/img/logo.png" alt="El Volcán" height="298" width="250">
			</div>
			<nav class="menu">
				<ul>
					<li><a href="/">inicio</a></li>
					<li><a href="?axn=imagenes">imágenes</a></li>
					<li><a href="?axn=ubicacion">ubicación</a></li>
					<li><a href="?axn=servicios">servicios</a>
						<ul>
							<li><a href="/">Habitaciones</a></li>
							<li><a href="/">Restaurant</a></li>
							<li><a href="/">Spa</a></li>
							<li><a href="/">Salón de Eventos</a></li>
							<li><a href="/">Espacios recreativos</a></li>
						</ul>
					</li>
					<li><a href="?axn=tarifas">tarifas</a></li>
					<li><a href="?axn=reservas">reservas</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<hr>
			<?php require_once($body_path);?>
			<?php if($axn): echo "<hr>";endif;?>
		</section>
		<?php 
			if(!$axn): 
				require_once(VIEW_PATH . "/_homeFooter.php");
			else: 
				require_once(VIEW_PATH . "/_defaultFooter.php");
			endif;
		?>
	</section>	
</body>
</html>