<?
// Archivo de configuración de las bases de datos...
//-----------------------------------
// Creador = Augusto Lozada.

// Usario de la base de datos.
$user = 'root';

// Clave del usuario de la base de datos.
$pass = '1234';

// Base de datos a usar en el sistema.
$bd	  = 'cccn';

// Servidor donde se encuentaa nuestra base de datos.
$host = 'localhost';

// Conexion a la base de datos, si falla tiene su error.
$conexion = mysql_connect($host,$user,$pass) or die ('Error al conectar en la servidor');

// Selector de base de datos, si falla contiene su respectivo error.
$selector = mysql_select_db($bd) or die ('Base de datos no encontrada');


?>