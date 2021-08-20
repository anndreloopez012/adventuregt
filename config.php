<?php

// Create connection
//$link = new mysqli("198.71.227.96:3306", "rayado", "Dr7t9c1&", "elrayado"); no es necesario...debería de ser localhost tambien
 //no hgas tu conexión con esta mierda de -> new mysqli ///esta mierda como da de problemas
///hacelo directamente con mysqli ya viste la diferencia? si bueno provare haber si carga
//$link = new mysqli("localhost", "root", "", "elrayado");

//$link = mysqli_connect("198.71.227.96:3306", "rayado", "Dr7t9c1&", "elrayado"); ///este es para cuando estes en linea

$link = mysqli_connect("localhost", "root", "", "elrayado"); 

if (!$link) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
// ya solo quedaria la conexion ala base de datos del hosting

?>