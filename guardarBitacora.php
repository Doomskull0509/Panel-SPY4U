<?php

include('conexion.php');

//Declaramos fecha y hora
date_default_timezone_set('America/Monterrey');
$fechax = date('d-m-Y');
$horax = date('H:i:s');

//Obtenemos datos ingresados mediante metodo POST del formulario HTML
$cliente = $_POST["serviciosy"];
$sucursal = $_POST["sucursalesy"];
$categoria=$_POST["categoriasy"];
$descripcion=$_POST["textbox1"];
$observaciones=$_POST["textbox2"];
$operador=$_POST["operadory"];



if(isset($_POST["btn-guardar"])){
    $check = getimagesize($_FILES["image-Bitacora"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image-Bitacora']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

	//Declaramos el query para insertar datos dentro de la tabla
        $guardarSQL = "INSERT INTO reg_bitacora (Fecha,Hora,Cliente,Sucursal,Categoria,Descripcion,Observaciones,imagen,operador) VALUES ('$fechax','$horax','$cliente','$sucursal','$categoria','$descripcion','$observaciones','$imgContent','$operador');";

//Conectamos y ejecutamos el Query
mysqli_query($conn, $guardarSQL);
    
    if ($guardarSQL) {
      
        echo "<script> alert('Registro correcto');window.location='registro_Operativo.html'  </script>";
    }   
    else 
    {
        echo "<script> alert('Ha ocurrido un error, por favor pongase en contacto con el administrador');window.location= 'registro_Operativo.html' </script>";
    }

}
}
?>
