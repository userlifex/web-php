<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento en php</title>
</head>
<body>
    <?php
        $br = "<br>"
    ?>
    <h2>Incremento en PHP</h2>
    <p>PHP acepta operadores de incremento o decremetno antes o despues de la variable</p>
    <ul>
        <li>
            <h3>Antes</h3>
            <p>Se asigna el valor ++ o -- antes de la variable y lo asignara antes de ser usada</p>
            <?php
                $i = 10;
                $j = 10;
                echo "mis variables son $i, $j".$br;
                echo "usando el operador de incremento ".++$i." ".--$j;
            ?>
        </li>
        <li>
            <h3>Despues</h3>
            <p>Se asigna el valor ++ o -- antes de la variable y lo asignara despues de ser usada</p>
            <?php
                $i = 10;
                $j = 10;
                echo "mis variables son $i, $j".$br;
                echo "usando el operador de incremento despues ".$i++." ".$j--;
            ?>
        </li>
    </ul>
</body>
</html>