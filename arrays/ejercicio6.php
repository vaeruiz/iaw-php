<?php
# Definir constante del array
define("num_elementos", 100);

# Paso 1. Declarar array
$lista = array();

# Paso 2. Inicializar array
$i = 0;
while ($i < num_elementos){
    $lista[$i] = rand(1, 30);
    $i++;
}

$suma = 0;

# Paso 3. Imprimir array
$i = 0;
while ($i < num_elementos) {
    echo $suma = $suma + $lista[$i];
    $i++;
    echo "<br>";
}

# Media
$media = $suma / num_elementos;
echo "Media: ".$media;
echo "<br>";

# Maximo
$maximo = max($lista);
echo "Máximo: $maximo";
echo "<br>";

# Minimo
$minimo = min($lista);
echo "Mínimo: $minimo";

?>