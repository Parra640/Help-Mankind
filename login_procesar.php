<?php 
 //Entrada
 $usuario = $_POST["username"];
 $contraseña = $_POST["password"];

 //Proceso
 $contraseña = sha1($contraseña);

$db = new PDO('mysql:host=localhost;dbname=helpmankind;charset=utf8','root','');
$stmt = $db->query("SELECT * FROM ong WHERE usuario = '$usuario' AND contraseña = '$contraseña'");
$ong = $stmt->fetchAll();

$validacion = false;

if (count($usuarios) ==1) {
    $validacion = true;
    session_start();
    $_SESSION = $usuario;
}
//Salida
if ($validacion) {
    header('Location: index.php');
}else{
    header('Location: login.php?error=1');
}
?>