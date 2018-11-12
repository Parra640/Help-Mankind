<img src="imagen_proyecto.jpeg" alt="15%">
<h1>Bienvenidos a Help Mankind</h1>
<p>Si deseas ayudar, pero no sabes como, habeis venido al lugar correcto</p>

<nav>
    <li>
        <ul><a href="index.php">Página principal</a></ul>
        <ul><a href="registrar_usuario.php">Crear cuenta</a></ul>
        <?php if isset(session_start()) { ?>
        <ul><a href="procesar_proyeccion.php">Registrar acciones sociales</a></ul>
        <?php  } ?>
    </li>
</nav>

<?php if isset(sessionstart()) { ?>
    <a href="logout.php">Cerrar sesión</a>
<?php }else { ?>
    <a href="login.php">Inicie sesión</a>
<?php } ?>

