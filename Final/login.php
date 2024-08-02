<?php session_start() ?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: Arial;
        }
        #contenido{
            width: 400px;
            height: 170px;
            padding-top: 20px;
            box-shadow: 1px 1px 4px gray;
            border-radius: 5px;
            margin: 40px auto;
            text-align: center;
        }
        #nombre, #boton{
            margin-top: 20px;
            border-radius: 20px;
            padding: 10px;
            border: none;
            box-shadow: 1px 1px 4px gray;
        }
        #boton{
            background-color: dodgerblue;
            color: white;
        }
    </style>
</head>
<body>
    <div id="contenido">
        <?php
            if(isset($_SESSION['nombre'])){
                echo "Bienvenido " . $_SESSION['nombre'] . "!";
            }
            else{
                echo "<h2>Acceder</h2>";
                echo "<form action='blog.php' method='post'>";
                echo "<p><input type='text' placeholder='Usuario' id='nombre' name='nombre' required autofocus></p>";
                echo "<p><input type='submit' id='boton' value='acceder'></p>";
                echo "</form>";
            }
        ?>
    </div>
    
</body>
</html>