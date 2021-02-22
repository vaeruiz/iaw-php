<?php

$variable = rand (0,10);
echo "$variable";
echo "<br>";
if ($variable >= 0 and $variable < 5) {
    echo "Insuficiente";
} elseif ($variable >= 5 and $variable < 6) {
    echo "Suficiente";
} elseif ($variable >= 6 and $variable < 7) {
    echo "Bien";
} elseif ($variable >= 7 and $variable < 9) {
    echo "Notable";
} else {
    echo "Sobresaliente";
}
?>