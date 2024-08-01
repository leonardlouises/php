<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h2>Has cerrado la sesión</h2>
    <br>
    <p><a href='login.php'>Ir al login</a></p>
</body>
</html>