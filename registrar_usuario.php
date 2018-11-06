<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de ONG</title>
</head>
<body>
    <form action="procesar_usuario.php" method="post">
        <div>
            Nombre de ONG:<input type="text" name="nombre">
        </div>
        <div>
            RUC: <input type="number" name="ruc">
        </div>
        <div>
            Usuario: <input type="email" name="user">
        </div>
        <div>
            Contraseña: <input type="password" name="contraseña">
        </div>
        
        <button type="submit">Listo</button>
    </form>
</body>
</html>