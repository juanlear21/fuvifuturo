<?php
   $destino = "fuvifuturomg@gmail.com";
   $nombre = $_POST["nombre"];
   $correo = $_POST["correo"];
   $telefono = $_POST["telefono"];
   $ciudad = $_POST["ciudad"];
   $pais = $_POST["pais"];
   $mensaje = $_POST["mensaje"];
   $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nCiudad: " . $ciudad . "\nPaís: " . $pais . "\nMensaje: " . $mensaje;
   mail($destino,"Contacto", $contenido);
   header("location:gracias.html");
?>