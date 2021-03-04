<?php

// Declaración del array
$lista = array();

// Inicialización del array
for ($i = 0; $i < 10; $i++) {
    $lista[$i] = rand(1,30);
}

// Imprimir array
for ($i = 0; $i < 10; $i++) {
    echo $lista[$i];
    echo "<br>";
}

?>