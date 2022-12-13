<?php

//Datos de acceso a Mysql
// $dbhost = "localhost";     		//---------> Servidor
// $dbuser = "id18339468_root";		  		//---------> Usuario
// $dbpass = "Alisson0509#"; 					//---------> Contraseña
// $dbname = "id18339468_monitoreo_gdcx";			    //---------> Database


$dbhost = "localhost";     		//---------> Servidor
$dbuser = "root";		  		//---------> Usuario
$dbpass = ""; 					//---------> Contraseña
$dbname = "monitoreo_s4u";			    //---------> Database

//Declaramos la conexion
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

?>