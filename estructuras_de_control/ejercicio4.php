<?php

$variable = rand (1,6);
echo "Ha salido $variable";
echo "<br>";
if ($variable == 1) {
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg'>";
} elseif ($variable == 2) {
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg'>";
} elseif ($variable == 3) {
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg'>";
} elseif ($variable == 4) {
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg'>";
} elseif ($variable == 5) {
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg'>";
} else {
    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg'>";
}
?>