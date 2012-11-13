<?
	include('motor.php');
	class noticias
	{
		public function noticia($idn)
		{
			$constructor = new plantillas();

			$consulta = mysql_query("SELECT * from noticias WHERE id='{$idn}'");
			if($consulta >= 1 )
			{
				// imprime la plantilla selecionada	....
				$result = mysql_fetch_assoc($consulta);
				$constructor->mostrar_noticia($result['autor'],$result['titulo'],$result['fecha'],$result['noticia']);
			}
			else
			{
				// imprime error que la noticia no existe...
				echo '<article class="NotFound"> Disculpé está página no existe </article> ';
			}	
		}
		
		public function mostrar_noticias($inicio)	
		{
			$constructor = new plantillas();
			$cantidad = $inicio + 5;

			$consulta = 'SELECT * FROM noticias ORDER BY id DESC limit 2';
			$query = mysql_query($consulta); // revisar esta linea de consulta problemas de booleanos
			while( $result = mysql_fetch_assoc($query) )
			{
				// Imprime por plantillas
				$constructor->mostrar_noticias($result['autor'],$result['titulo'],$result['fecha'],substr($result['noticia'],0,300)."...",$result['id']);
			}
			echo '<a class="seguir" href="noticias.php?cant='.$cantidad.'">Ver Antiguas</a>';	
		}
	}

	$lector = new noticias();
?>