<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>
    <?php

    echo "Valor de pi: " . pi() . "<br>";
    echo "Valor mínimo de [3, 67, 2, 19]: " . min(3, 67, 2, 19) . "<br>";
    echo "Valor máximo de [3, 67, 2, 19]: " . max(3, 67, 2, 19) . "<br>";
    echo "Valor absoluto de -6.7: " . abs(-6.7) . "<br>";
    echo "Raíz cuadrada de 100: " . sqrt(100) . "<br>";
    echo "Redondeo de 0.4: " . round(0.4) . "<br>";
    echo "Redondeo de 0.7: " . round(0.7) . "<br>";
    echo "Valor random: " . rand() . "<br>";
    echo "Valor random de 0 a 100: " . rand(0, 100) . "<br>";
    ?>
</body>
</html>