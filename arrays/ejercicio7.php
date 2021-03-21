<?php
# Definir constante del array
define("num_elementos", 100);

# Paso 1. Declarar array
$lista = array();

# Paso 2. Inicializar array
$i = 0;
do {
    $lista[$i] = rand(1, 30);
    $i++;
} while ($i < num_elementos);

$suma = 0;

# Paso 3. Imprimir array
$i = 0;
do  {
    echo $suma = $suma + $lista[$i];
    $i++;
    echo "<br>";
} while ($i < num_elementos);

# Media
$media = $suma / num_elementos;
echo "La media es: ".$media;
echo "<br>";


# Maximo
$maximo = max($lista);
echo "El valor máximo es : $maximo";
echo "<br>";

# Minimo
$minimo = min($lista);
echo "El valor minimo es : $minimo";

?>