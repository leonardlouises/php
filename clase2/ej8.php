<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2</title>
</head>
<body>
    <?php

    $edades = array("Juan" => 23, "Pedro" => 17, "María" => 22);
    echo "Juan tiene " . $edades['Juan'] . " años";

    echo "<br>";
    foreach($edades as $clave => $valor){
        echo "clave: $clave, valor: $valor";
        echo "<br>";
    }

    ?>
</body>
</html>