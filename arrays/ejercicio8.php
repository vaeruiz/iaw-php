<?php
# Definir una constante del array
define("num_elementos", 10);

# Paso 1. Declarar array
$lista = array();

# Paso 2. Inicializar array
for ($i = 0; $i < num_elementos; $i++){
    $lista[$i] = rand(1, 30);
}

echo "<h1>Array Desordenado</h1>";

# Paso 3. Imprimir array
for ($i = 0; $i < num_elementos; $i++) {
    echo $lista[$i];
    echo "<br>";
}

# Paso 4. Ordenar array de menor a mayor
sort($lista);

echo "<h1>Orden de menor a mayor</h1>";

# Paso 5. Imprimir array
for ($i = 0; $i < num_elementos; $i++) {
    echo $lista[$i];
    echo "<br>";
}

# Paso 6. Ordenar array de mayor a menor
rsort($lista);

echo "<h1>Orden de mayor a menor</h1>";

# Paso 7. Imprimir array
for ($i = 0; $i < num_elementos; $i++) {
    echo $lista[$i];
    echo "<br>";
}

?>