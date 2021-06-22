<?php
  $destinatario = ' carlos154sw@gmail.com';
  //ESTO ES EL CORREO AL QUE SE ENVIARA EL MENSAJE
  $nombre = $_POST['nombre'];
  $tel = $_POST['tel'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];
  $email = $_POST['email'];

  $header = "Enviado desde la pagina de Renueva HOGAR";
  $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

  mail($destinatario, $asunto, $mensajeCompleto, $header);
  echo "<script> alert('Correo enviado exitosamente') </script>";
  echo "<script> setTimeout(\"location.href='index.html'\",1000) </script>";
?>