<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 3</title>
</head>
<body>
    <?php

        $productos = array(
            array("Heladera", 2500, 2), 
            array("Microondas", 1500, 4), 
            array("Cocina", 1000, 5),
            array("Horno", 3000, 10)
        );

        for($i = 0; $i < count($productos); $i++){
            print("<p>" . $productos[$i][0] . ", precio: " . $productos[$i][1] . " unidades: " . $productos[$i][2] . "</p>");
        }

        echo "<br>";
        for($i = 0; $i < count($productos); $i++){
            print("<br>producto " . $i + 1);
            for($j = 0; $j < 3; $j++){
                print(" " . $productos[$i][$j]);
                if($j != 2){
                    print(" - ");
                }
            }
        }

        echo "<br><br>";
        foreach($productos as $pro){
            foreach($pro as $p){
                print($p . " | ");
            }
        }
    ?>
</body>
</html>