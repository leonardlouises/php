<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo for y condicionales</title>
    <style>
        p.par, p.impar{
            display: inline;
        }
        .par{
            color: green;
        }
        .impar{
            color: red;
        }
        span{
            color: black;
        }
    </style>
</head>
<body>
    <h3>Ciclo for y condicionales Números pares verdes, impares rojos</h3>
    <?php
        for($i = 0; $i <= 100; $i++){
            if($i % 2 == 0 && $i != 100){
                echo "<p class='par'>$i<span> , </span></p>";
            }
            else if($i % 2 != 0 && $i != 100){
                echo "<p class='impar'>$i<span> , </span></p>";
            }
            else{
                echo "<p class='par'>$i</p>";
            }
        }
    ?>
</body>
</html>