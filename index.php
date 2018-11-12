<?php
$db = new PDO('mysql:host=localhost;dbname=helpmankind;charset=utf8','root','');
$stmt = $db->query("SELECT * FROM proyeccion social ORDER BY codigo");
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
     <?php include 'menu.php'?>
     <h2>Proyecciones Sociales:</h2>
     <?php foreach as ($proyeccionsocial as $ps){?>            
            Organización: <h1><?php echo $ps["$og"] ?></h1>
            Lugar: <p><?php echo $ps["$lu"] ?></p>
            Fecha: <p><?php echo $ps["$fc"] ?></p>
            Objetivo: <p><?php echo $ps["$ob"] ?></p>
            Descripción: <p><?php echo $ps["$dc"] ?></p>
     <?php } ?>
</body>
</html>