<?php 
 //Entrada
 $correo = $_POST["username"];
 $contraseña = $_POST["password"];

 //Proceso
 $contraseña = sha1($contraseña);

 
?>