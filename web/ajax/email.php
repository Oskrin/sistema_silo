<?php 
$nom=$_POST['txt_1'];
$mail=$_POST['txt_2'];
$tema=$_POST['txt_3'];
$msm=$_POST['txt_4'];
//print($nom.$mail.$tema.$msm);
?>
<?php
$para  = 'elsilosocial@gmail.com' . ', '; // atención a la coma
$para .= 'deividscriollo@deividscriollo.hol.es';
 
// Asunto
$titulo = '';

// Cuerpo o mensaje
$mensaje = '
<style type="text/css">
  .banner{
    background: #4C6600;
    padding: 20px;
    font-size: 20px;
    color: #FFF;
    text-align: center;
    text-transform: uppercase;

  }
  .opcion{
  
  padding: 20px;
  font-size: 20px;
  display: block; text-decoration: none;
  font: 150px Helvetica, Arial, Sans-Serif; letter-spacing: -1px;  
  color: #000; 

 }
 .opcion span{
  color: #000!important;
  font-size: 25px!important;
  text-align: justify!important;
  font: 100; !important;
  text-align: center!important;
  letter-spacing: 0px!important;
 }
 .ba{
  font-size: 30px;
 }
 
</style>
<html>
<head>
  <title>Correo Sitio Web</title>
  <meta charset="utf-8" />
</head>
<body>
  <div class="banner">
    Informacion del Correo
  </div>
  <div class="opcion ba">
    Nombre: <span>'.$nom.'</span>
  </div>
  <div class="opcion ba">
    Correo: <span>'.$mail.'</span>
  </div>
  <div class="opcion ba">
    Tema: <span>'.$tema.'</span>
  </div>
  <div class="opcion ba">
    Mensaje. <span>'.$msm.'</span>
  </div>
    
    
     
</body>
</html>
';
 
// Cabecera que especifica que es un HMTL
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Cabeceras adicionales
$cabeceras .= 'From: Sitio Web EL SILO' . "\r\n";
$cabeceras .= 'Cc: Proceso de envio de mensajes de su sitio web' . "\r\n";
$cabeceras .= 'Bcc: EL SILO' . "\r\n";
 
// enviamos el correo!
//print(mail($para, $titulo, $mensaje, $cabeceras));
?>
0
