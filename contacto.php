<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="¡Tu opinión es importante! Ponte en contacto con nosotros y ayúdanos a mejorar esta gran comunidad" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Contacto | AventuraCraft Chile minecraft server 1.8</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700" />
	<link rel="stylesheet" href="css/estilos.css" />
</head>
<body>

	<!-- Cabecera de la pagina, incluye logo y menu -->

	<div id="wrapper_header">
		<header>
			<section id="logo">
				<h1><a href="index.html"><span>AVENTURA</span>CRAFT</a></h1>
				<h2>Servidor minecraft Chile</h2>
				<h2>IP: 192.99.18.75:25680</h2>
			</section>
			<nav>
				<ul id="navegacion">
					<li class="servidor"><a href="#">SERVIDOR</a></li>
					<li><a href="http://aventuracraftchile.forochile.org/">FORO</a></li>
					<li><a href="tienda.html">TIENDA</a></li>
					<li><a href="contacto.php">CONTACTO</a></li>
				</ul>
			</nav>
		</header>
		<div id="menu_servidor">
			<ul>
				<li><a href="tematica.html">TEMATICA</a></li>
				<li><a href="http://aventuracraftchile.forochile.org/t1-reglamento-de-la-comunidad">REGLAS</a></li>
				<li><a href="staff.html">STAFF</a></li>
			</ul>
		</div>
	</div>
	<div id="wrapper">

		<!-- Staff del servidor -->

		<section class="seccion">
			<h3>Contacto</h3>
			<div>
				<h1>Contactanos</h1>
				<p>Aqui puedes dejar tu reclamo, algunas ideas, plugins que deveriamos colocar, si quieres ayudar en algo. Todo lo que quieras y te responderemos en cuanto veamos tu mensaje. Solo tienes que dejar tu nombre, correo, asunto y tu mensaje. Desde ya te damos gracias por preferirnos.</p>
				<section>
					<?php
				if (!isset($_POST['correo'])) {
				?>
					<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
						<div>
							<input type="text" name="nombre" id="name" placeholder="Nombre*" required>
							<input type="email" name="correo" id="mail" placeholder="Correo*" required>
							<input type="text" name="asunto" id="asunt" placeholder="Asunto*" required>
						</div>
						<textarea name="mensaje" id="coment" placeholder="Mensaje*" required></textarea>
						<input id="enviar" type="submit" value="Enviar">
					</form>
				<?php
				}else{
					$mensaje="Mensaje del formulario de contacto de Soreti";
					$mensaje.= "\nNombre: ". $_POST['nombre'];
					$mensaje.= "\nEmail: ".$_POST['correo'];
					$mensaje.= "\nAsunto: ". $_POST['asunto'];
					$mensaje.= "\nMensaje: \n".$_POST['mensaje'];
					$destino= "sheikrik@gmail.com";
					$remitente = $_POST['correo'];
					$asunto = "Mensaje enviado por: ".$_POST['nombre'];
					mail($destino,$asunto,$mensaje,"FROM: $remitente");
				?>
  					<p><strong>Mensaje enviado.</strong></p>
				<?php
				}
				?>
				</section>
			</div>
		</section>
	</div>
	<footer>
		<div class="wrapper_min">
			<section class="footer_info">
				<h3>MINECRAFT</h3>
				<ul>
					<li><a href="https://minecraft.net/">Pagina Oficial</a></li>
					<li><a href="https://mojang.com/">Mojang</a></li>
				</ul>
			</section>
			<section class="footer_info">
				<h3>INFORMACIÓN</h3>
				<ul>
					<li><a href="http://aventuracraftchile.forochile.org/t1-reglamento-de-la-comunidad">Reglamento</a></li>
				</ul>
			</section>
			<section class="footer_info">
				<h3>SIGUENOS</h3>
				<ul>
					<li><a class="icon-facebook" href="https://www.facebook.com/pages/Aventuracraft/188646714592333"></a> FACEBOOK</li>
					<li><a class="icon-twitter" href="#" ></a> TWITTER</li>
					<li><a class="icon-google-plus" href="#" ></a> GOOGLE+</li>
					<li><a class="icon-youtube" href="https://www.youtube.com/user/AventuraCraftChile"></a> YOUTUBE</li>
				</ul>
			</section>
			<div class="footer_aclaracion">
				<p>- AventuraCraft no esta afiliada a Mojang.com o Minecraft.net. Todo lo referente a ellos en la comunidad es propiedad de Minecraft ®/TM & © 2009-2013 Mojang / Notch -</p>
				<p>- Powered by <a href="mailto:sheikrik@gmail.com">Sheikrik</a> -</p>
			</div>
		</div>
	</footer>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/funciones.js"></script>
</body>
</html>