<?php
//Entrada
$na = $_POST["nombre"];
$ag = $_POST["edad"];
$co = $_POST["correo"];
//Proceso
$db = new PDO('mysql:host=localhost;dbname=helpmankind;charset=utf8','root','');
$stmt = $db->query("INSERT * INTO voluntario VALUES('$na','$ag','$co')");
//Salida
header('Location: voluntario_confirm.php')
?>