<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 8: BBDD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h2 class="text-center">Agregar Cliente</h2>
        <form action="guardarController.php" method="post" class="text-center">
            <input type="text" name="cedula" placeholder="Cédula" class="mt-3" required autofocus>
            <br>
            <input type="text" name="nombreA" placeholder="Nombre y apellido" class="mt-3" required>
            <br>
            <input type="text" name="telefono" placeholder="Teléfono" class="mt-3" required>
            <br>
            <input type="submit" value="Agregar" class="btn btn-success mt-3">
        </form>
        <hr>
    </div>
    <h2 class="text-center" id="datos">Datos de clientes</h2>
    <?php

        include("conexion.php");

        $sentencia = "SELECT * FROM CLIENTE;";

        $resulset = $conexion->query($sentencia);

        if($resulset->num_rows > 0){
            echo "<table class='table text-center' style='width:500px;margin:20px auto;'>";
            echo "<thead><tr><th>Cédula</th><th>Nombre y Apellido</th><th>Teléfono</th><th>Eliminar</th></tr></thead><tbody>";
            while($f = $resulset->fetch_assoc()){
                $cedula = $f['CEDULA'];
                $nombre = $f['NOMBREAPELLIDO'];
                $telefono = $f['TELEFONO'];
                echo "<tr class='oculto'><td>$cedula</td><td>$nombre</td><td>$telefono</td><td><form action='guardarController.php' method='get'><input type='hidden' value='$cedula' name='ced'><button type='submit' class='btn btn-danger' id='bt'><img src='imagen.png' width='15' height='15'></button></form></td></tr>";

            }
            echo "</tbody></table>";
        }
    ?>
</body>
</html>