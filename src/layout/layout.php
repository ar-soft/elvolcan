<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="es">
<head>
	<meta charset="utf-8"/>
	
	<title>Hotel El Volcán</title>
	<link rel="stylesheet" type="text/css" href="/web-app/css/styles.css">
</head>
<body>
	<section id="content">
		<header>
			<div>
				<img id="logo" src="web-app/img/logo.png" alt="El Volcán" height="298" width="250">
			</div>
			<nav>
				<ul>
					<li><a href="/">inicio</a></li>
					<li><a href="?axn=imagenes">imágenes</a></li>
					<li><a href="?axn=ubicacion">ubicación</a></li>
					<li><a href="?axn=tarifas">tarifas</a></li>
					<li><a href="?axn=reservas">reservas</a></li>
				</ul>
			</nav>
		</header>
		<hr>
		<div class="orange-column"></div>
		<?php require_once($body_path);?>
	</section>	
</body>
</html>