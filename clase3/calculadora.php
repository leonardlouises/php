<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php
        $resultado = 0;
        $numero1 = 0;
        $numero2 = 0;

        if(isset($_GET['numero1']) && isset($_GET['numero2'])){
            $numero1 = $_GET['numero1'];
            $numero2 = $_GET['numero2'];

            if(!empty($numero1) || !empty($numero2)){
                $resultado = $numero1 . " + " . $numero2 . " = " . $numero1 + $numero2;
            }
            else{
                echo "Debe rellenar los campos";
            }
        }
    ?>
    <form method="get" action="calculadora.php">
        <input type="text" value="0" name="numero1" placeholder="número 1">
        <input type="text" value="0" name="numero2" placeholder="número 2">
        <button type="submit" value="0" name="suma">sumar</button>
        <br>
        <input type="text" value="<?php echo $resultado ?>" disabled>
    </form>
</body>
</html>

