<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo while</title>
</head>
<body>
    <h3>Ciclo while</h3>
    <?php
        $temperatura = 0;
        while($temperatura <= 100){
            echo "<p>La temperatura es: $temperatura °c</p>";
            $temperatura++;
        }
    ?>
</body>
</html>