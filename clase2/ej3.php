<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales múltiples</title>
</head>
<body>
    <h3>Condicionales múltiples</h3>
    <?php
        $edad = 20;

        echo "<p>La edad es $edad</p>";
        if($edad < 18){
            echo "<p>Es menor de edad</p>";
        }
        else if($edad > 18){
            echo "<p>Es mayor de edad</p>";
        }
        else{
            echo "<p>Algo anda mal</p>";
        }
    ?>
</body>
</html>