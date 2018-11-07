<?php
$db = new PDO('mysql:host=localhost;dbname=helpmankind;charset=utf8','root','');
$stmt = $db->query("SELECT * FROM proyeccion_social ORDER BY codigo");
$proyeccionsocial = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página principal</title>
</head>
<body>
     <h1>Bienvenido a Help Mankind</h1>
     <h1>Si deseas ayudar a la humanidad estás en el lugar indicado</h1>
     <a href="registrar_usuario.php">Para usar este sitio una cuenta es requerida, si no tiene una haga clic aqui</a>
     <a href="login.php">Si ya tiene una cuenta, entre aqui</a>
     <h2>Proyecciones Sociales:</h2>
     <?php foreach as ($proyeccionsocial as $ps){?>            
            Organización: <h1><?php echo $ps["$og"] ?></h1>
            Lugar: <p><?php echo $ps["$lu"] ?></p>
            Fecha: <p><?php echo $ps["$fc"] ?></p>
            Objetivo: <p><?php echo $ps["$ob"] ?></p>
            Descripción: <p><?php echo $ps["$dc"] ?></p>
     <?php } ?>
    <a href="registro_voluntario.php">Quiero unirme a esta obra social</a>   
     <?php if (isset($sessionstart())) { ?>
        <a href="registrar_proyeccion.php">Registre su proyección</a>
     <?php } ?>   
</body>
</html>