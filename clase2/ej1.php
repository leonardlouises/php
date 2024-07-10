<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php
        $num1 = 3;
        $num2 = 6;

        echo "<p>El número 1 es $num1 y el número 2 es $num2</p>";
        echo "<h3>Operadores aritméticos</h3>";
        echo "<p>Suma: $num1 + $num2 = " . ($num1 + $num2) . "</p>";
        echo "<p>Resta: $num1 - $num2 = " . ($num1 - $num2) . "</p>";
        echo "<p>Multiplicación: $num1 * $num2 = " . ($num1 * $num2) . "</p>";
        echo "<p>División: $num1 / $num2 = " . ($num1 / $num2) . "</p>";
        echo "<p>Exponente: $num1 ** $num2 = " . ($num1 ** $num2) . "</p>";
        echo "<p>Resto: $num1 % $num2 = " . ($num1 % $num2) . "</p>";

        echo "<h3>Operadores de comparación : 1 verdadero, espacio falso</h3>";
        echo "<p>Igual: $num1 == $num2 = " . ($num1 == $num2) . "</p>";
        echo "<p>Distinto: $num1 != $num2 = " . ($num1 != $num2) . "</p>";
        echo "<p>Mayor: $num1 > $num2 = " . ($num1 > $num2) . "</p>";
        echo "<p>Menor: $num1 < $num2 = " . ($num1 < $num2) . "</p>";
        echo "<p>Mayor o igual: $num1 >= $num2 = " . ($num1 >= $num2) . "</p>";
        echo "<p>Menor o igual: $num1 <= $num2 = " . ($num1 <= $num2) . "</p>";

        echo "<h3>Operadores lógicos</h3>";
        echo "<p>Y lógico: $num1 < $num2 && $num1 != $num2 = " . ($num1 < $num2 && $num1 != $num2) . "</p>";
        echo "<p>O lógico: $num1 == $num2 || $num1 > $num2 = " . ($num1 == $num2 || $num1 > $num2) . "</p>";
        echo "<p>Negación: $num1 == $num2 = " . !($num1 == $num2) . "</p>";
    ?>
</body>
</html>
