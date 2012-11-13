<?
	include('core/noticias.php');
	header ('Content-type: text/html; charset=utf-8');
	$controlador->iniciar();
	$constructor->header();

	echo '<section id="contenido">';
		
		if(isset($_GET['idn']))
		{
			$lector->noticia($_GET['idn']);
		}
		else
		{
			if(isset($_GET['cant']))
			{
				$lector->mostrar_noticias($_GET['cant']);
			}
			else
			{	
				$lector->mostrar_noticias(5);
			}	
		}
	echo '</section>';	

	$constructor->footer(); 
?>