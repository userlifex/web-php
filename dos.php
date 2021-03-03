<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de dato</title>
</head>

<body>

    <h2>TIPOS DE DATO EN PHP</h2>
    <p>LOS TIPOS BASICOS EN PHP SON:</p>

    <?php
        $br = "</br>"
    ?>
    <ol>
        <li>
            <h3>Boolean</h3>
            <p>Puede tomar el valor de True o false</p>
            <?php
            $bandera = true;

            if($bandera == true){
                echo "true";
            } else{
                echo "false";
            }
            ?>
        </li>
        <li>
            <h3>Integer</h3>
            <p>Numeros de valor entero</p>
            <?php
            $edad = 22;
            $year = 2021;
            $covid = 19;

            echo "edad: $edad".$br;
            echo "año : $year".$br;
            echo "covid-".$covid;
            ?>
        </li>
        <li>
            <h3>Float o Double</h3>
            <p>Permite escribir valores decimales</p>
            <?php
            $PI = 3.14;
            $E = 2.71;

            echo "PI = $PI $br";
            echo "E = $E $br";
            ?>
        </li>
        <li>
            <h3>String</h3>
            <p>Almacena cadenas de texto</p>
            <?php
            $presidente = "safasti";
            $universidad = "unp";

            echo $universidad;
            echo $presidente;
            ?>
        </li>
        <li>
            <h3>Array</h3>
            <p>Almacena un conjunto de datos de diferente valor y tipo, puede tener clave y valor</p>
            <?php
            $vocales  = array('a', 'e', 'i', 'o', 'u');
            var_dump($vocales);
            // echo "Las vocales son ".$vocales;
            ?>
        </li>
    </ol>

</body>

</html>