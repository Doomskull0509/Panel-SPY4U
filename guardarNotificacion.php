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
    
    $mail->addAddress('s.gasga.m@gmail.com', 'Samuel Gasga [Personal]');     //Add a recipient
    // $mail->addCC('monitoreo@spy4u.com.mx', 'Monitoreo SPY4U'); // Add CC
    // $mail->addCC('gerencia.monitoreo@spy4u.mx', 'Gerencia de Monitoreo SPY4U'); // Add CC
    // $mail->addCC('coordinacion.monitoreo@spy4u.mx', 'Coordinacion de Monitoreo SPY4U'); // Add CC


         //------------------------------------------------------------------------------------------------------Inicia Adjuntar imagen

// Verificar que se recibieron archivos
 if(!empty($_FILES['image-Notificacion'])) 
 {

     // No es necesario contar
     // Recorrer el arreglo de nombres por índice
     for($i = 0; $i < count($_FILES['image-Notificacion']['name']); $i ++)
      {
         // Comprobar que no hay error en el archivo, incluir índice
         if ($_FILES["image-Notificacion"]["error"][$i] == 0)
          {
             // Obtener ruta del archivo temporal
             $tempFileName = $_FILES["image-Notificacion"]["tmp_name"][$i];
             // Obtener nombre real
             $fileName = $_FILES["image-Notificacion"]["name"][$i];
             $imgContent = addslashes(file_get_contents($tempFileName));       

             // Adjuntar al correo
             $mail->AddAttachment($tempFileName, $fileName);

  //Declaramos el query para insertar datos dentro de la tabla
  $guardarSQL = "INSERT INTO reg_notificacion (Fecha,Hora,Cliente,Sucursal,Categoria,Descripcion,Observaciones,imagen,operador) VALUES ('$fechax','$horax','$cliente','$sucursal','$categoria','$descripcion','$observaciones','$imgContent','$operador');";

      
         }
     }
 }



//------------------------------------------------------------------------------------------------------Termina Adjuntar imagen

    //Content
    $mail->isHTML(true);  
  
     //Set email format to HTML
    $mail->Subject = "Reporte de Notificacion - ".$cliente." - ".$sucursal." - [".$fechax."]";
    
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

    $message1 .= "<tr style='color:rgb(0, 0, 0)' bgcolor='#F8E418'>";  
    $message1 .= "<td colspan='4'>";  
    $message1 .= "<h1><b>";  
    $message1 .= "<center>REPORTE DE NOTIFICACION</center>";  
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
    echo "<script> alert('Registro correcto');window.location='registro_Notificacion.html'  </script>";
  }
  else
  {
    echo "<script> alert('Error al guardar en DB');window.location='registro_Notificacion.html'  </script>";

  }





    } 

catch (Exception $e) 
{
    echo "Error: {$mail->ErrorInfo}";
}

    //----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Termina Mailer
      

?>
