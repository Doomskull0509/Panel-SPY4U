<?php

include('conexion.php');

//Obtenemos datos ingresados mediante metodo POST del formulario HTML
$user = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];
$name=$_POST["txtnombre"];
$auth=$_POST["adminpass"];

//Declaramos una variable con una dato fijo que sera nuestra clave de autorizacion
$adminpass="Alisson0509#";

//Comparamos el dato ingresado por el usuario con nuestra variable fija
if ($auth == $adminpass)
{

	$queryselect 	= mysqli_query($conn,"SELECT * FROM users_data WHERE usuario = '$user'");
	$nr = mysqli_num_rows($queryselect); 

	if ($nr == 0)
	{

		//Encriptamos la contraseña con la funcion password_hash
		$encrypt_pass = password_hash($pass, PASSWORD_BCRYPT);

		//Declaramos el query para insertar datos dentro de la tabla
		$queryregistrar = "INSERT INTO users_data (usuario, password, name) values ('$user','$encrypt_pass','$name')";
	
				//Conectamos y ejecutamos el query
				if(mysqli_query($conn,$queryregistrar))
				{
					echo "<script> alert('Usuario registrado correctamente');window.location= 'index.html' </script>";
				}
					else 
				{
					echo "<script> alert('No puede registrar a este usuario, por favor pongase en contacto con el administrador');window.location= 'index.html' </script>";
				}

	}
		else
	{
		echo "<script> alert('No puede registrar a este usuario, por favor pongase en contacto con el administrador');window.location= 'index.html' </script>";
	}

} 
	else
{
	echo "<script> alert('No puede registrar a este usuario, por favor pongase en contacto con el administrador');window.location= 'index.html' </script>";

}

?>