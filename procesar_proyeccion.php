<?php
//Entrada
$og = $_POST["organizacion"];
$lu = $_POST["lugar"];
$fc = $_POST["fecha"];
$ob = $_POST["objetivo"];
$dc = $_POST["descripcion"];
//Proceso
$db = new PDO('mysql:host=localhost;dbname=helpmankind;charset=utf8','root','');
$stmt = $db->query("INSERT * INTO proyeccion_social VALUES(NULL,'$og','$lu','$fc','$ob','$dc')");
//Salida
header('Location: proyeccion_confirmar.php')
?>