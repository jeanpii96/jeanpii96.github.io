<?php

$mysqli = new mysqli("localhost", "root", "", "proyecto");

if ($mysqli->connect_error){

    die ('Error en la Conexion' . $mysqli->connect_error); 
} 
// codigo para guarda utf8
mysqli_set_charset($mysqli, "utf8");

// Mostrar info de la conexion

/* printf ("Servidor Informacion: %s\n", $mysqli->server_info); */
?>