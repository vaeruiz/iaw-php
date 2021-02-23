<?php

$variable = rand (1,6);
echo "Ha salido $variable";
echo "<br>";
if ($variable == 1) {
    echo "<img src='imagenes/dado1.jpg'>";
} elseif ($variable == 2) {
    echo "<img src='imagenes/dado2.jpg'>";
} elseif ($variable == 3) {
    echo "<img src='imagenes/dado3.jpg'>";
} elseif ($variable == 4) {
    echo "<img src='imagenes/dado4.png'>";
} elseif ($variable == 5) {
    echo "<img src='imagenes/dado5.jpg'>";
} else {
    echo "<img src='imagenes/dado6.jpg'>";
}
?>