<!DOCTYPE html>
<html>
<head>
	<title>Coca-Cola</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="description" content="cocacola">
	<meta name="keywords" content="bebida, cola, cocacola">
	<link rel="shortcut icon"  href="img/favicon.png">
	<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet"  href="style.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<script src="https://kit.fontawesome.com/1f67e4ca53.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class="container">
			<a href=""><img src="img/logo.svg" class="logo"></a>
			<nav>
				<a href="#inicio">Inicio</a>
				<a href="#nosotros">Nosotros</a>
				<a href="#servicios">Servicios</a>
				<a href="#galería">Galería</a>
				<a href="#contáctanos">Contáctanos</a>
			</nav>
			<a href=""class="hamb"><i class="fas fa-bars"></i></a>
		</div>
	</header>
	<main>
		<section id="inicio">
			<img  src="img/bannerprincipal.jpg">
			<div class="bloque-inicio">
				<h1>Bienvenidos a Coca Cola</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="#nosotros" class="boton boton-rojo">Ver más</a>
			</div>
		</section>
		<section id="nosotros" class="sección">
			<div class="container">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi utn ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat c.</p>
			</div>
		</section>
		<section id="servicios" class="sección">
			<div class="container">
				<div class="row">
					<div class=" columna33 columna-mobile-100">
						<div class="bloque-servicio">
							<div class="bloque-imágen cuadrado-perfecto">
								<img src="img/servicio1.jpg">
							</div>
							<div class="bloque-contenido-servicio">
								<h3>Servicio 1</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
								<a class="botón botón-blanco" href="#">Ver más</a>
							</div>
						</div>
					</div>
					<div class=" columna33 columna-mobile-100">
						<div class="bloque-servicio">
							<div class="bloque-imágen cuadrado-perfecto">
								<img width="1320" src="img/servicio2.jpg">
							</div>
							<div class="bloque-contenido-servicio">
								<h3>Servicio 2</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
								<a class="botón botón-blanco" href="#">Ver más</a>
							</div>
						</div>
					</div>
					<div class=" columna33 columna-mobile-100">
						<div class="bloque-servicio">
							<div class="bloque-imágen cuadrado-perfecto">
								<img src="img/servicio3.jpg">
							</div>
							<div class="bloque-contenido-servicio">
								<h3>Servicio 3</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
								<a class="botón botón-blanco" href="#">Ver más</a>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</section>
		<section id="galería">
			<div class="container-fluid">
				<div class="row">
					<div class="columna33  columna-mobile-50">
						<div class="cuadrado-perfecto">
							<img src="img/servicio1.jpg">
							<h4>Imágen 1</h4>							
						</div>
					</div>
					<div class="columna33  columna-mobile-50">
						<div class="cuadrado-perfecto">
							<img  src="img/servicio2.jpg">
							<h4>Imágen 2</h4>							
						</div>
					</div>
					<div class="columna33 columna-mobile-50">
						<div class="cuadrado-perfecto">
							<img src="img/servicio3.jpg">
							<h4>Imágen 3</h4>							
						</div>
					</div>
					<div class="columna33 columna-mobile-50">
						<div class="cuadrado-perfecto">
							<img src="img/servicio1.jpg">
							<h4>Imágen 4</h4>							
						</div>
					</div>
					<div class="columna33 columna-mobile-50">
						<div class="cuadrado-perfecto">
							<img  src="img/servicio2.jpg">
							<h4>Imágen 5</h4>							
						</div>
					</div>
					<div class="columna33 columna-mobile-50">
						<div class="cuadrado-perfecto">
							<img src="img/servicio3.jpg">
							<h4>Imágen 6</h4>							
						</div>
					</div>

				</div>
			</div>
		</section>
		<section id="contáctanos" class="sección">
			<iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Cuenca+(Proyecto)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
			<div class="container-fluid">
				<div class="row">
					<div class="columna columna50 empujar-50 columna-mobile-100 empujar-mobile-0 sinpadding-mobile">
						<form action="index.php" method="post">
							<div class="form-block">
								<input class="form-control" type="text" name="nombre" placeholder="nombre">				
							</div>
							<div class="form-block">
								<input class="form-control" type="mail" name="correo" placeholder="correo">				
							</div>
							<div class="form-block">
								<textarea name="mensaje" placeholder="Mensaje"></textarea>
							</div>
							<div class="form-block bloqueultimo">
								<input type="submit" value="Enviar" class="boton boton-negro">
							</div>
							<!--Código php-->
							<?php
								if($_SERVER["REQUEST_METHOD"]=="POST")
								{
									$nombre = $_POST["nombre"];
									$correo = $_POST["correo"];
									$mensaje = $_POST["mensaje"];

									IF(isset($nombre))
									{
										IF(isset($correo))
										{
											IF(isset($mensaje))
											{
												$para = "homero64.vuele@gmail.com";
												$asunto = "Esto es una prueba";
												$cuerpo = $nombre."\n".$correo."\n".$mensaje;
												$adicional = "from:martinbravo1011@gmail.com";
												mail($para, $asunto, $cuerpo, $adicional);
											?>
												<p>Envío exitoso</p>
											<?php
											}
										}
									}
								}





							?>
						</form>
					</div>
				</div>
			</div>
			
		</section>
	</main>
	<footer>
		<div class="container">
			<div class="row">
				<div class="columna columna-25 columna-mobile-100"><br>
					<img src="img/logo-blanco.png" class="logo-footer"><br><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p><br>					
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>Datos de contacto</h3>
						<ul>
							<li>martinbravo1016@gmail.com</li>
							<li>0994739474</li>
							<li>Av. de las Américas<li>
							<li>Cuenca - Ecuador</li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>Temas relacionados</h3>
						<ul>
							<li><a href="#">Tema 1</a></li>
							<li><a href="#">Tema 2</a></li>
							<li><a href="#">Tema 3</a></li>
						</ul>
					</div>
					<div class="columna columna-25 redes columna-mobile-100">
						<h3>Redes sociales</h3>
						<ul>
							<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="barra-footer">
				&copy; Derechos reservados - 2021
			</div>
		</div>
	</footer>
	<script src="js/jquery.js"></script>
	<script type="js/funciones.js"></script>
</body>
</html>