<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

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
       

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Inicia Mailer

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try
 {
    //Server settings
    $mail->SMTPDebug = 0;                     						//Enable verbose debug output
    $mail->isSMTP();                                        		//Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    		//Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 		//Enable SMTP authentication
    $mail->Username   = 'sender.spy4u@gmail.com';                     //SMTP username
    $mail->Password   = 'avwcoxtjllbsqjwj';                               //SMTP password
    $mail->SMTPSecure = 'tls';            							//Enable implicit TLS encryption
    $mail->Port       = 587;                                  		//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sender.spy4u@gmail.com', 'Sender SPY4U');
    

if ($cliente== "AAADAM") {
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga1]');     //Add a recipient
} elseif ($cliente== "Almacenes DC"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga2]');     //Add a recipient
} elseif ($cliente== "Angeli Torcha"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga3]');     //Add a recipient
} elseif ($cliente== "Best Trading"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga4]');     //Add a recipient
} elseif ($cliente== "Casa Name"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga5]');     //Add a recipient
} elseif ($cliente== "CCO Altavista"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga6]');     //Add a recipient
} elseif ($cliente== "Chacurteria"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga7]');     //Add a recipient
} elseif ($cliente== "Chilemex"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga8]');     //Add a recipient
} elseif ($cliente== "City Office"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga9]');     //Add a recipient
} elseif ($cliente== "Cusa"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga10]');     //Add a recipient
} elseif ($cliente== "Gapa"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga11]');     //Add a recipient
} elseif ($cliente== "GN10"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga12]');     //Add a recipient
} elseif ($cliente== "Iberia"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga13]');     //Add a recipient
} elseif ($cliente== "Joyeros Emblematicos"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga14]');     //Add a recipient
} elseif ($cliente== "Krispy Kreme"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga15]');     //Add a recipient
} elseif ($cliente== "Leon Weill"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga16]');     //Add a recipient
} elseif ($cliente== "Modatelas"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga17]');     //Add a recipient
} elseif ($cliente== "Monte Everest 120"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga18]');     //Add a recipient
} elseif ($cliente== "Mumuso"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga19]');     //Add a recipient
} elseif ($cliente== "Oro Florentino"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga20]');     //Add a recipient
} elseif ($cliente== "Papeles Planos"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga21]');     //Add a recipient
} elseif ($cliente== "Promologistics"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga22]');     //Add a recipient
} elseif ($cliente== "Punto y Coma"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga23]');     //Add a recipient
} elseif ($cliente== "Rhino"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga24]');     //Add a recipient
} elseif ($cliente== "Ribbon"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga25]');     //Add a recipient
} elseif ($cliente== "Rosa Negra"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga26]');     //Add a recipient
} elseif ($cliente== "Salomon Cassab"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga27]');     //Add a recipient
} elseif ($cliente== "Samsonite"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga28]');     //Add a recipient
} elseif ($cliente== "Sellcom"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga29]');     //Add a recipient
} elseif ($cliente== "Simjis"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga30]');     //Add a recipient
} elseif ($cliente== "Solulogis"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga31]');     //Add a recipient
} elseif ($cliente== "SPA Dania"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga32]');     //Add a recipient
} elseif ($cliente== "Teatro San Rafael"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga33]');     //Add a recipient
} elseif ($cliente== "UCA"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga34]');     //Add a recipient
} elseif ($cliente== "Usana"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga35]');     //Add a recipient
} elseif ($cliente== "VI Logistica"){
  $mail->addAddress('dharius178@gmail.com', 'Samuel Gasga36]');     //Add a recipient
} else {
  $mail->addAddress('s.gasga.m@gmail.com', 'Samuel Gasga [Personal]');     //Add a recipient
}

// $mail->addCC('gerencia.monitoreo@spy4u.mx','Gerencia de Monitoreo SPY4U');
 // $mail->addCC('coordinacion.monitoreo@spy4u.mx', 'Coordinacion de Monitoreo SPY4U'); 
 //  $mail->addCC('calidad@spy4u.mx', 'Gerencia de Calidad SPY4U'); 

 //  $mail->addCC('alex@spy4u.mx', 'Account Manager SPY4U'); 
  //  $mail->addCC('luisa@spy4u.mx, 'Account Manager SPY4U'); 


// $mail->addBCC('ngutierrez@spy4u.com.mx','DIRECCION GENERAL SPY4U');

         //------------------------------------------------------------------------------------------------------Inicia Adjuntar imagen

// Verificar que se recibieron archivos
 if(!empty($_FILES['image-Incidencia'])) 
 {

     // No es necesario contar
     // Recorrer el arreglo de nombres por índice
     for($i = 0; $i < count($_FILES['image-Incidencia']['name']); $i ++)
      {
         // Comprobar que no hay error en el archivo, incluir índice
         if ($_FILES["image-Incidencia"]["error"][$i] == 0)
          {
             // Obtener ruta del archivo temporal
             $tempFileName = $_FILES["image-Incidencia"]["tmp_name"][$i];
             // Obtener nombre real
             $fileName = $_FILES["image-Incidencia"]["name"][$i];
             $imgContent = addslashes(file_get_contents($tempFileName));       

             // Adjuntar al correo
             $mail->AddAttachment($tempFileName, $fileName);

  //Declaramos el query para insertar datos dentro de la tabla
  $guardarSQL = "INSERT INTO reg_incidencias (Fecha,Hora,Cliente,Sucursal,Categoria,Descripcion,Observaciones,imagen,operador) VALUES ('$fechax','$horax','$cliente','$sucursal','$categoria','$descripcion','$observaciones','$imgContent','$operador');";

      
         }
     }
 }



//------------------------------------------------------------------------------------------------------Termina Adjuntar imagen

    //Content
    $mail->isHTML(true);  
  
     //Set email format to HTML
    $mail->Subject = "Reporte de Incidencia - ".$cliente." - ".$sucursal." - [".$fechax."]";
    
    //--------------------------INICIA CUERPO DEL CORREO---------------------------------//

    $message1  = "<html><body>";

    $message1 .= "<style>";  
    $message1 .= " @font-face {";   
    $message1 .= " font-family: Eurostile;";  
    $message1 .= "src: url('../fonts/euro/Eurostile.ttf');";  
    $message1 .= "}";  
    $message1 .= "</style>";  

    $message1 .= "<img src='https://www.spy4u.com.mx/img/spy4u-logo/logo.png' alt='spy4u-logo' width='200em' height='100em'>";  
    $message1 .= "<img src='https://i.postimg.cc/Pfc8Kp7b/APLICACIONES-IC-SPY4-U-RGB-2019-05.jpg' alt='logo2' width='200em' height='100em'>";  
    $message1 .= "<br><br><br>";  

    $message1 .= "<center>";  

    $message1 .= "<table border='10' style='font-family:eurostile'>";  

    $message1 .= "<tr style='color:rgb(0, 0, 0)' bgcolor='#58F758'>";  
    $message1 .= "<td colspan='4'>";  
    $message1 .= "<h1><b>";  
    $message1 .= "<center>REPORTE DE INCIDENCIA</center>";  
    $message1 .= "</b></h1>";  
    $message1 .= "</td>";  
    $message1 .= "</tr>";  
   
    $message1 .= "<tr style='color:white' bgcolor='#000000'>";  
    $message1 .= "<td>";  
    $message1 .= "<center><b>FECHA Y HORA</b></center>";  
    $message1 .= "</td>";  
    $message1 .= "<td>";  
    $message1 .= "<center><b>CLIENTE</b></center>";  
    $message1 .= "</td>";  
    $message1 .= "<td>";  
    $message1 .= "<center><b>SUCURSAL</b></center>";  
    $message1 .= " </td>";  
    $message1 .= "<td>";  
    $message1 .= "<center><b>CLASIFICACION</b></center>";  
    $message1 .= "</td>";  
    $message1 .= "</tr>";  
   
    $message1 .= "<tr>";  
    $message1 .= "<td>";  
    $message1 .= "<center>".$fechax."     ".$horax."</center>";  
    $message1 .= "</td>";  
    $message1 .= "<td>";  
    $message1 .= "<center>".$cliente."</center>";  
    $message1 .= "</td>";  
    $message1 .= "<td>";  
    $message1 .= "<center>".$sucursal."</center>";  
    $message1 .= "</td>";  
    $message1 .= "<td>";  
    $message1 .= "<center>".$categoria."</center>";  
    $message1 .= "</td>";  
    $message1 .= "</tr>";  
  
    $message1 .= "<tr bgcolor='#C1C1C1'>";  
    $message1 .= "<td colspan='4'>";  
    $message1 .= "<center><b>DESCRIPCION DEL REPORTE</b></center>";  
    $message1 .= "</td>";  
    $message1 .= "</tr>";  
    $message1 .= "<tr>";  
    $message1 .= "<td colspan='4'>".$descripcion."</td>";  
    $message1 .= "</tr>";  
    $message1 .= "</table>";  
    $message1 .= "<BR>";  
  
    $message1 .= "<table border cellpading='0' cellspacing='10' style='font-family:eurostile'>";  
    $message1 .= "<tr style='color:white' bgcolor='#000000'>";  
    $message1 .= "<td colspan='4'>";  
    $message1 .= "<center><b>OBSERVACIONES</b></center>";  
    $message1 .= " </td>";  
    $message1 .= "</tr>";  
    $message1 .= "<tr>";  
    $message1 .= "<td colspan='4'>".$observaciones."</td>";  
    $message1 .= "</tr>";  
    $message1 .= "</table>";  
    $message1 .= "<BR>";  

    $message1 .= "<p style='text-align:left'>-----------------</p>";  
    $message1 .= " <p style='font-family:eurostile; text-align:left;'><i>El contenido de este mensaje de datos no se considera oferta, propuesta o acuerdo,
    sino hasta que sea confirmado en documento por escrito que contenga la firma autógrafa del apoderado
    legal de S4U PROFESSIONAL COMMAND CENTER S A P I DE CV . El contenido de este mensaje de datos es
    confidencial y se entiende dirigido y para uso exclusivo del destinatario, por lo que no podrá
    distribuirse y/o difundirse por ningún medio sin la previa autorización del emisor original. Si usted no
    es el destinatario, se le prohíbe su utilización total o parcial para cualquier fin.</i></p>";  
    $message1 .= "<p style='font-family:eurostile'>Mensaje enviado automaticamente desde la plataforma de monitoreo de SPY4U, favor de no responder.</p>";
    $message1 .= "</center>";  

    $message1 .= "</body></html>";	

    //--------------------------TERMINA CUERPO DEL CORREO---------------------------------//

    $mail->Body    = $message1;      // -----------------> ENVIO DE CORREO EN FORMATO HTML

    // Activo condificacción utf-8
    $mail->CharSet = 'UTF-8';

    //Conectamos y ejecutamos el Query
  mysqli_query($conn, $guardarSQL);

  if ($guardarSQL) 
  {
    $mail->send();
    echo "<script> alert('Registro correcto');window.location='registro_Incidencia.html'  </script>";
  }
  else
  {
    echo "<script> alert('Error al guardar en DB');window.location='registro_Incidencia.html'  </script>";

  }





    } 

catch (Exception $e) 
{
    echo "Error: {$mail->ErrorInfo}";
}

    //----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Termina Mailer
      

?>
