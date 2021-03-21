<?php

# include (si la funcion no existe continua ejecutando el codigo) require (necesita que el archivo exista, no continua si no existe)
include "funciones.php";

# Haciendo uso de la funcion "saludo"
saludo();

echo "<br>";

saludo_usuario("Desi");

echo "<br>";

$salida = saludo_usuario_con_salida("Desi");
echo $salida;

?>