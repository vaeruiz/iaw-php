<?php

$variable = rand (1,6);
echo "Ha salido $variable";
echo "<br>";
if ($variable = 1) {
    echo "<img src='introduccion2/imagenes/monedacara.jpg'>";
} elseif ($variable = 2) {
    echo "<img src='introduccion2/imagenes/dado2.png'>";
} elseif ($variable = 3) {
    echo "<img src='introduccion2/imagenes/dado3.png'>";
} elseif ($variable = 4) {
    echo "<img src='introduccion2/imagenes/dado4.png'>";
} elseif ($variable = 5) {
    echo "<img src='introduccion2/imagenes/dado5.png'>";
} else {
    echo "<img src='introduccion2/imagenes/dado6.png'>";
}
?>