<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <table border="3">
        <tr>
            <?php

            # Ejercicio hecho con la ayuda de Pedro José Salvador

                for ($numero=1; $numero <= 10 ; $numero++) { 
                    echo "<tr>";
                    for ($i=0; $i <=10 ; $i++) { 
                        $resultado = $numero*$i;
                        
                        echo "<td>$numero*$i = $resultado</td>";
                        
                    }
                    echo "</tr>";
                    
            }
        
            ?>
        </tr5>
</body>
</html>