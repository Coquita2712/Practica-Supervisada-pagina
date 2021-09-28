<?php 
 $host = "localhost";
	$basededatos = "practica";
	$usuariobd = "root";
	$clavebd = "";
	$tabla_bd1 = "formulario";

	error_reporting(0);//No muestra errores en pantalla
	$conexion = new mysqli($host,$usuariobd,$clavebd,$basededatos);
	if ($conexion -> connect_errno) {
	 	echo "Problemas de conexion ";
	 	exit();
	 } 
?>