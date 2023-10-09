<?php

// Ejercicio 4.

// recoger dos numeros por Url parametro get y realizar todas las operaciones basicas

if (isset($_GET['numero1']) && isset($_GET['numero2']) ) {

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo '<h1>Calculadora<h1> <br/>';
    echo 'Suma:' .($numero1+$numero2). "<br/>";
    echo 'Resta' .($numero1-$numero2). '<br/>';
    echo 'Multiplicacion'.($numero1*$numero2). '<br/>';
    echo 'Division' .($numero1/$numero2). '<br/>'; 


} else {
    echo '<h1>introduce los parametros correctamente por la Url <h1>';
}
