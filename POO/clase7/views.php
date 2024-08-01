<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO clase 7</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Registro de clientes</h2>
    <form action="controllers.php" method="post">
        <fieldset>
            <legend>Datos personales</legend>
            <input type="text" name="nombre" placeholder="Nombre" required autofocus>
            <input type="text" name="cedula" placeholder="Cédula" required>
            <input type="text" name="fechaN" placeholder="Fecha de nacimiento" required>
            <br>
            <input type="text" name="telefono" placeholder="Teléfono" required>
            <input type="text" name="direccion" placeholder="Dirección" required>
            <div>
                <input type="submit" name="agregar" value="Agregar cliente" class="button">
            </div>
        </fieldset>
        <a href="controllers.php?logout=true">Limpiar</a>
    </form>
    <table>
        <?php

            if(isset($_SESSION['cliente'])){
                echo "<hr><h2>Datos de clientes</h2>";
                echo "<thead><tr><th id='izq'>Cliente</th><th>Nombre</th><th>Cédula</th><th>Fecha de nacimiento</th><th>Teléfono</th><th id='der'>Dirección</th></tr></thead>";
                foreach($_SESSION['cliente'] as $clientes){
                    echo "<tr>";

                    foreach($clientes as $c){
                        echo "<td>" . $c . "</td>";
                    }

                    echo "</tr>";
                }
            }
        
        ?>
    </table>
</body>
</html>