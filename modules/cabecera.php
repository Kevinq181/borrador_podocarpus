<?php
 include ("../dll/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $site_name;?></title>
	<meta charset="utf-8">
	<meta name="description" content="Visualización de aves del Ecuador">
	<meta name="keywords" charset="aves, ecuador, turismo, loja, bird">
	<meta name="author" content="UTPL by @rlramirez">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?> /css/estilos.css">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css' />

</head>
<body>
	<header>
		<h1>Bird Visualizations <span class="slogan">with HTML5 and CSS3</span></h1>
		<?php echo $site_name;?>
		<nav>
			<a href="" class="menuinicio">Home</a>
			<a href="#databases">Aves</a>
			<a href="#databases">Noticias</a>
			<a href="#service">Servicios</a>
			<a href="#type">Lugares del parque</a>
			<a href="#contacts" >Personal encargado</a>
			<a href="#contacts" >Visitas</a>
			<a href="#contacts" >Sensores</a>
			<a href="#contacts" class="menufin">Actividades</a>
		</nav>
	</header>