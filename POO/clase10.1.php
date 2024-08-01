<?php

$meses = array("Enero", "febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

echo rand(1, 30) . " de " . $meses[rand(0, 11)] . " de " . rand(1920, 2024);