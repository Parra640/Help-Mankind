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
     <h1>Bienvenido a Help Mankind</h1>
     <h1>Si deseas ayudar a la humanidad estás en el lugar indicado</h1>
     
     <h2>Proyecciones Sociales:</h2>
    

</body>
</html>