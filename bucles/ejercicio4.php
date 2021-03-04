<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <table border="1">
        
            <?php
                $numero = rand(1, 10);
                for ($i=0; $i <= 10 ; $i++) { 
                    $resultado = $numero*$i;
                    echo "<tr>";
                    echo "<td>$numero*$i = $resultado</td>";
                    echo "</tr>";
            }
        
            ?>
        
</body>
</html>