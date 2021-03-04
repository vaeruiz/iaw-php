<?php

$productos = array("Disco SSD", "Memoria RAM", "Monitor");
$numero_de_elementos = count($productos);

for ($i = 0; $i < $numero_de_elementos; $i++ ) {
    echo $productos[$i];
    echo "<br>";
}
?>