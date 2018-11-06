<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Publicacion de acciones sociales</title>
</head>
<body>
<body>
    <form action="procesar_proyeccion.php" method="post">
        <div>
            Lugar:<input type="text" name="lugar">
        </div>
        <div>
            Fecha: <input type="dater" name="fecha">
        </div>
        <div>
            Objetivo: <input type="text" name="objetivo">
        </div>
        <div>
            Descripcion: <textarea name="descripcion" cols="30" rows="10"></textarea>
        </div>
        
        <button type="submit">Publicar</button>
    </form>
</body>
</html>