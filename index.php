<?php 
include_once("functions.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
	<title>Ejemplo de url amigable con php</title>
	<link rel="shortcut icon" href="" defer />
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" defer>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" defer>
	<meta name="description" content="" />
	<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="https://jaimefranko.com/" />
	
</head>

<body>
	<nav class="blue-grey darken-4" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="https://jaimefranko.com" class="brand-logo">Jaime Franko</a>
			<ul class="right hide-on-med-and-down">
				<li></li>
			</ul>

			<ul id="nav-mobile" class="sidenav">
				<li></li>
			</ul>
			<a data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		</div>
	</nav>

		<div class="container">
			
			<br><br>
			<h1 class="header center orange-text">Crear urls amigables con .htaccess y PHP</h1>
			<div class="row center">
				<h5 class="header col s12 light"></h5>
			</div>

			<div class="container center">
				<!-- inicia codigo -->
<?php
if(isset($_POST["crear"])){
			$titulo = $_POST["titulo"];
			$contenido = htmlspecialchars($_POST["contenido"], ENT_QUOTES);
			$link = limpiar($titulo);
	    $id_entrada = 2;
?>
					Clic en la url: <a href="publicacion.php?id_entrada=<?php echo $id_entrada;?>&titulo=<?php echo $link;?>&contenido=<?php echo $contenido;?>">
		jaimefranko.com/ejemplos_php/url-amigable-ejemplo/<?php echo $link;?></a>
					<?php
	}
?>
				<form class="col s12" method="post">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">mode_edit</i>
							<input id="input_text" class="active" type="text" name="titulo" placeholder="Escribe el titulo de tu url" required value="<?php echo $_POST['titulo'];?>">
							<label for="input_text">Titulo</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">comment</i>
							<textarea id="textarea1" class="materialize-textarea" name="contenido" placeholder="Escribe tu contenido" required><?php echo $_POST['contenido'];?></textarea>
							<label for="textarea1">Contenido</label>
						</div>
					</div>
					<div class="row">

						<button class="btn waves-effect waves-light" type="submit" name="crear">Crear
														<i class="material-icons right">send</i>
													</button>
					</div>
				</form>
				
					<!-- finaliza codigo -->
			</div>
			<br><br>

		</div>
	</div>


	<div class="container">
		<div class="section">

			<!--   Icon Section   -->
			<div class="row">
				<div class="col s12 m4">
					<div class="icon-block">
						<h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
						<h5 class="center">MySql</h5>

						<p class="light">Ejemplo facil de programar en php para mejorar nuestro seo. Espera el tutorial conectado a una base de datos MySql, gracias por visitar mi blog. </p>
					</div>
				</div>

				<div class="col s12 m4">
					<div class="icon-block">
						<h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
						<h5 class="center">Php</h5>

						<p class="light">Contenido de php, mysql, posicionamiento web, seo, marketing, tutoriales de manejo de base de datos, php system, etc.</p>
					</div>
				</div>

				<div class="col s12 m4">
					<div class="icon-block">
						<h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
						<h5 class="center">Donativos</h5>

						<p class="light center">
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="center">
								<input type="hidden" name="cmd" value="_s-xclick" />
								<input type="hidden" name="hosted_button_id" value="JMVL4LZMYR42G" />
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
								<img alt="" border="0" src="https://www.paypal.com/en_SV/i/scr/pixel.gif" width="1" height="1" />
							</form>
						</p>
					</div>
				</div>
			</div>

		</div>
		<br><br>

	</div>

	<footer class="page-footer blue-grey darken-4">

		<div class="footer-copyright">
			<div class="container">
				Powered By <a class="orange-text text-lighten-3" href="https://jaimefranko.com">Jaime Franko <?php echo date("Y");?></a>
			</div>
		</div>
	</footer>

	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" async></script>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" async></script>

</body>

</html>