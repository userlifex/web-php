<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asosiativo</title>
</head>
<body>
    <?php
        $br = "</br>"
    ?>

    <h2>Array asosiativos en PHP</h2>
    <p>Los arrays asociativos son arrays cuyos keys son strings personalizados. Para acceder a los valores de un array asociativo se hace de la misma forma que con arrays numéricos, mediante corchetes:</p>

    <?php
        $dias = [
            "lunes" => 1,
            "martes" => 2,
            "miercoles" => 3,
            "jueves" => 4,
            "viernes" => 5,
            "sabado" => 6,
            "domingo" => 7
        ];

        echo "Que dia de la semana es el lunes => ".$dias["lunes"].$br;
        echo "Que dia de la semana es el martes => ".$dias["martes"].$br;
        echo "Que dia de la semana es el miercoles => ".$dias["miercoles"].$br;
        echo "Que dia de la semana es el jueves => ".$dias["jueves"].$br;
        echo "Que dia de la semana es el viernes => ".$dias["viernes"].$br;
        echo "Que dia de la semana es el sabado => ".$dias["sabado"].$br;
        echo "Que dia de la semana es el domingo => ".$dias["domingo"].$br;

    ?>
</body>
</html>