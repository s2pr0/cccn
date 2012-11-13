<?
	include('configuraciones/config.php');
	class plantillas{

		public function header(){
			echo'<!DOCTYPE>
				<html lang="es_VE">
					<head>
						<title>Centro Norte</title>
						<meta charset="utf-8" />
						<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
						<link rel="stylesheet" href="lib/css/interfaz.css" type="text/css" />
						<script src="lib/js/prefixfree.min.js" type="text/javascript"></script>
						<!--Funciones propias del sitio-->
						<script src="lib/js/funciones.js" type="text/javascript"></script>
						<meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1"/>
					<head>
					<body>
					<header>';
			if($_SESSION["Tipo"] >= 1)
			{	
				echo '<section id="usuario"><p id="login-top" onclick="cerrar()">Session iniciada como ".$_SESSION["Nombre"].". Click para Cerrar Session</p></section>';
			}
			else 
			{	
				echo '<section id="usuario"><p id="login-top" onclick="barra()">Iniciar Session</p></section>';
			}

			echo '<section id="logo">
							<img src="lib/img/logo.png" id="imagen-logo"/>
						</section>	
					<nav id="menu-principal">
						<ul>
							<a href="index.php" class="links"><li class="link">Inicio</li></a>
							<a href="noticias.php" class="links"><li class="link">Noticias</li></a>
							<a href="libro.php" class="links"><li class="link">Libro de Visitas</li></a>
							<a href="administración.php" class="links"><li class="link">Administración</li></a>
							<a href="solicitudes.php" class="links"><li class="link">Solicitudes</li></a>
						<ul>	
					</nav>
					</header>
					<section id="cuerpo">';
		}
		public function footer(){
			echo '			<footer>Diseñado como proyecto socio tecnologico, Mision Sucre, Aldea Universitaria Gran Mariscal de Ayacucho</footer>
					</section>
					</body>
				</html>';
		}

		public function mostrar_noticia($autor,$titulo,$fecha,$noticia){
			echo '<article class="titulo-noticia">'.$titulo.'</article>';
			echo '<article class="autor-noticia">'.$autor.'</article>';
			echo '<article class="noticia">'.$noticia.'</article>';
			echo '<article class="fecha-noticia">'.$fecha.'</article>';
		}

		public function mostrar_noticias($autor,$titulo,$fecha,$noticia,$idn){
			echo '<article class="titulo-noticia">'.$titulo.'</article>';
			echo '<article class="autor-noticia">'.$autor.' '.$fecha.'</article>';
			echo '<article class="noticia">'.$noticia.'<a class="seguir" href="noticias.php?idn='.$idn.'">  Seguir Leyendo</a></article>';
			echo '<hr />';
		}
	}

	class control{
		public function iniciar()
		{
			session_start();
			if(!isset($_SESSION['Tipo']))
			{
				$_SESSION['Tipo'] = 0;
			}	
		}	

	}

	$controlador = new control();
	$constructor = new plantillas();
?>