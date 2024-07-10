<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php

        $dia[0] = "lunes";
        $dia[1] = "martes";
        $dia[2] = "miércoles";
        $dia[3] = "jueves";
        $dia[4] = "viernes";
        $dia[5] = "sábado";
        $dia[6] = "domingo";

        $hoy = date("N") - 1;
        print("El valor de hoy: " . $hoy . "<br>");
        print("Hoy es: " . $dia[$hoy]);

        print("<h3>Los días son</h3>");
        for($i = 0; $i < count($dia); $i++){
            if($i == $hoy){
                print("<button>" . $dia[$i] . "</button> <br>");
            }
            else{
                print("<p>" . $dia[$i] . "</p>");
            }
        }
    ?>
</body>
</html>
