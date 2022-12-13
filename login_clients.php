<?php

include('conexion.php');

//Obtenemos datos ingresados mediante metodo POST del formulario HTML
$user = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

//Sentencia o Query para conectar y leer registros de base de datos
$query = mysqli_query($conn,"SELECT * FROM users_data_clients WHERE usuario = '$user'");

//Contador de registros del query SELECT
$nr = mysqli_num_rows($query);

$buscar_pass = mysqli_fetch_array($query);

$queryselect 	= mysqli_query($conn,"SELECT name FROM users_data_clients WHERE usuario = '$user'");

//Si existe registro, mostrar mensaje de conexion exitosa, sino el usuario no esta registrado 
if(($nr == 1) && (password_verify($pass,$buscar_pass['password'])))
{
	echo "<script> alert('Acceso Exitoso, bienvenido (a)');window.location= 'panel_clients.html' </script>";
}
else if ($nr == 0) 
{
	echo "<script> alert('Usuario no registrado');window.location= 'clients_login.html' </script>";
}

?>