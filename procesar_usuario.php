<?php
//Entrada
$n = $_POST["nombre"];
$r = $_POST["ruc"];
$u = $_POST["user"];
$c = $_POST["contraseña"];

//Proceso
$db = new PDO('mysql:host=localhost;dbname=helpmankind;charset=utf8','root','');
$stmt = $db->query("INSERT * INTO ong VALUES(NULL,'$n','$r','$u','$c')");

//Salida
header('Location: usuario_confirmado.php');
?>