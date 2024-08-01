<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caso Practico 4</title>
</head>
<body>
    <h1></h1>
    <?php
    $array =[1,7,8,4,5,9,3,7,1,3,9,2,6,10,15,13,12,14,11];
    echo "Array original";
    echo "<br>";
    print_r($array);

    // Mostramos el array.
    echo "<br>";
    $arrayContador=array();
    foreach ($array as $valor) {
        if (array_key_exists($valor, $arrayContador)) {
            $arrayContador[$valor]=$arrayContador[$valor] + 1;
        } else{
            $arrayContador[$valor]=1;
        }
    }

    echo "<br>";
    //Primero ordenamos el array.
    ksort($arrayContador);

    //Despues mostramos el aray ya ordenado.
    echo "<br>";
    print_r($arrayContador);
    echo "<br>";
    echo "Contador de veces que se repiten los números -> ";
    foreach ($arrayContador as $clave=>$valor) {
        echo "<br>";
        echo "El numero $clave se repite $valor ".($valor==1?"vez":"veces");
    }




    ?>
</body>
</html>



<?php
