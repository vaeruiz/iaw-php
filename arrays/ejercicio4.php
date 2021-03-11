<?php

// Paso 1 declaración del array
$lista = array();

// Paso 2 iniciar array
for ($i=0; $i < 10; $i++) { 
    $lista[$i] = rand(1, 30);
}

// Paso 3 imprimir array
for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}

$minimo = min( $lista );

echo "<br>";

echo " El valor mínimo es: $minimo";

?>