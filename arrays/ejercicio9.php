<?php

$lista = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");

# Ordenar array de menor a mayor por el valor
echo "<h2>Ordenar de menor a mayor por valor</h2>";

asort($lista);

# Imprimir contenido del array
foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}

# Ordenar el array de mayor a menor por el valor

echo "<h2>Ordenar de mayor a menor por valor</h2>";

arsort($lista);

# Imprimir contenido del array
foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}

# Ordenar el array de menor a mayor por la clave

echo "<h2>Ordenar de menor a mayor por clave</h2>";

ksort($lista);

# Imprimir contenido del array
foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}

# Ordenar el array de mayor a menor por la clave

echo "<h2>Ordenar de mayor a menor por clave</h2>";

krsort($lista);

# Imprimir contenido del array
foreach ($lista as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}


?>