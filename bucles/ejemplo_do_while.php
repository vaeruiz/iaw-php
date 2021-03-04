<?php
$i = 1;
do {
    echo "<table>
            <caption>$i</caption>
            <caption>$i</caption>
          </table>";
    echo "<br>";
    $i++;
} while ($i <= 10);

$i = 10;
do {
    echo $i;
    echo "<br>";
    $i--;
} while  ($i >= 0);

?>