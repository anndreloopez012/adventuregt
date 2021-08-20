<?php
 
$mysqli = new mysqli("localhost", "root", "", "elrayado");
 
if($mysqli->connect_error) {
	echo "<b>Fallo al conectar a la BD: </b>" . $mysqli->connect_error . "---" . $mysqli->connect_error;
}
 
return $mysqli;
 
 ?>