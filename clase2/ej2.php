<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y condicionales</title>
</head>
<body>
    <h3>Variables y condicionales</h3>
    <?php 
        $num1 = 12;
        $num2 = 8;
    
        echo "<p>Número 1: $num1, número 2: $num2</p>";
        if($num1 > $num2){
            echo "<p>El número 1 es mayor y vale $num1</p>";
        }
        else{
            echo "<p>El número 2 es mayor y vale $num2</p>";
        }
    ?>
</body>
</html>