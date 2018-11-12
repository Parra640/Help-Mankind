<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesión</title>
</head>
<body>
    <h1>Help Mankind</h1>

    <?php if isset($_GET["error"]) { ?>
        <p>Datos inválidos</p>
    <?php } ?>
    <form action="login_procesar.php" method="post">
        <div>
            Usuario: <input type="email" name="username">
        </div>
	    <div>
            Contraseña: <input type="password" name="password"><br>
        </div>
        <div>
            <button type="submit">Iniciar sesion</button>
        </div>
    </form>
</body>
</html>