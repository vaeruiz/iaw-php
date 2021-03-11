<?php

// Paso 1 declaración del array
$lista = array();

// Paso 2 iniciar el array
for ($i=0; $i < 10; $i++) { 
    $lista[$i] = rand(1, 30);
}

// Paso 3 imprimir array
for ($i=0; $i < 10; $i++) { 
    echo $lista[$i];
    echo "<br>";
}

$suma = 0;
foreach ($lista as $clave) {
    $suma += $clave;
}

$numeros = count($lista);

$media = $suma / $numeros;

echo "<br>";

echo "La media es: $media";

?>