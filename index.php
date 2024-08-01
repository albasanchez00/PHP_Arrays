<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>
<h1>Array de Nombres</h1>
<?php
    /* Las dos maneras de hacer arrays */
    $docente=array(); //array vacío
    $hombres=array("José Luis","Mónico","Daniel","Andrés","Juan","Sergio","Raul");
    $mujeres=["Monica","Marina","Tania","Arantxa","Alba","Ana"];

    /* Count -> Muestra el numero de elementos / longitud del array */
    echo "Hombres -> ".count($hombres);
    echo "<br>";
    echo "Mujeres -> ".count($mujeres);
    echo "<br>";
    echo "Docente -> ".count($docente);
    echo "<br>";
    echo "<br>";

    $docente[20]="Irina";
    /* var_dump -> Muestra la información de una variable. */
    var_dump($docente);

    echo "<br>";
    $hombres[]="Francisco"; //Inserta un nuevo valor en la última posición.
    /* Otro Ejemplo */
    $hombres[]=16; //Inserta un nuevo valor entero en la última posición.
    var_dump($hombres);
    echo "<br>";
    for ($i=0;$i<count($mujeres);$i++){
            echo "<br>";
            echo "Mujer con el índice nª $i es -> $mujeres[$i]";
        }

    echo "<br>";
    $vocales="aeiou";
    for ($i=0;$i<strlen($vocales);$i++){
        echo "<br>";
        echo "Vocal -> $vocales[$i]";
    }


    /*  Arrays Asociativos  */
    $alumnoEmpresa=array("Apigón"=>"Andrés","Elite"=>"Alba","Ceat"=>"Dani","Ecode"=>"Sergio","Ikonox"=>"Marina,Tania","GeteCom"=>"José Luis,Raul,Mónico");
    echo "<br>";
    $alumnoEmpresa2=array("Apigón"=>"Andrés","Elite"=>"Alba","Ceat"=>"Dani","Ecode"=>"Sergio","Ikonox"=>["Marina","Tania"],"GeteCom"=>["José Luis","Raul","Mónico"]);
    echo "<br>";
    var_dump($alumnoEmpresa);
    echo "<br>";
    var_dump($alumnoEmpresa2);

    echo "<br>";
    echo "<br>";
    echo "Alumno de Elite -> ".$alumnoEmpresa['Elite'];
    // echo "Alumnos de Ikonox -> ".$alumnoEmpresa2['Ikonox']; -> Esto daría ERROR

    // Para recorrer y si quieres mostrar los valorse de un array asocitativo, debes utilizar el bucle foreach()
    foreach ($alumnoEmpresa as $clave => $valor){
        echo "<br>";
        echo "Empresa $clave - Alumno $valor";
    }

    echo "<br>";
    /*  Actividad -> Crea un Array con los meses del año y la estación que le corresponde a cada uno (Aprox) */
    $estacionesMes=array("Invierno"=>"Noviembre,Diciembre,Enero,Febrero","Primavera"=>"Marzo,Abril,Mayo","Verano"=>"Junio,Julio,Agosto","Otoño"=>"Septiembre,Octubre");
    foreach ($estacionesMes as $clave => $valor){
        echo "<br>";
        echo "Estación $clave - Mes -> $valor";
    }


    /*  Funciones de Arrays*/
    echo "<br>";
    $basura=[1,2,3,4,5,6,7,8,9,10];
    echo "<br>";
    var_dump($basura);


    // Unset() -> Elimina un elemento informando su posicion o si indicas el array, borra el array completo.
    unset($basura[5]);
    echo "<br>";
    var_dump($basura);
    echo "<br>";
    foreach ($basura as $numero){
        echo "<br>";
        echo "Numero $numero";
    }
    echo "<br>";
    unset($basura);
    // var_dump($basura); -> Dará ERROR, porque se eliminó en la línea anterior.

    echo "<br>";
    print_r($hombres); //Muestra el contenido en formato string (cadena) sin los datos que te muestra el var_dump.


    /*  Reindexamos el elemento eliminado   */
    echo "<br>";
    $basura=[1,2,3,4,5,6,7,8,9,10];
    unset($basura[5]);
    print_r($basura);
    echo "<br>";
    $basura2=array_values($basura);
    print_r($basura2);


    /*  Comparar dos arrays y en un tercer array guardar los elementos del primero que no setán en el segundo   */
    echo "<br>";
    $numeroa=[5,10,15,2,8,24,1];
    $diferencia=array_diff($numeroa,$basura);
    echo "<br>";
    print_r($diferencia);


    /*  Rellenar un array con un valor indicado  */
    // Indicando -> Inicio, posicion, valor...
    $docentes=array_fill(0,19,"Docente");
    $docentes[19]="Irina"; //En la posicion 19 devolverá "Irina" en vez de "Docente"
    echo "<br>";
    print_r($docentes);
    echo "<br>";


    /*  Buscar un indice en un array  */
    // Si existe Apigón, que la empresa en un imprenta, sino, indico que no particial en  el dual.
    if (array_key_exists("Apigón",$alumnoEmpresa)){ //El metodo devuelve true o false, y busca en el array la clave que le solicitas.
        echo "<br>";
        echo "Apigón participa en el dual y es una imprenta.";
    }else{
        echo "<br>";
        echo "Apigón no participa en el dual.";
    }


    /*  Buscar en un array la clave de un valor */
    echo "<br>";
    $clave=array_search("Dani",$alumnoEmpresa);
    echo "<br>";
    echo $clave;


    /* sort() -> Ordena un array por su índice*/
    echo "<br>";
    sort($hombres);
    sort($mujeres);
    echo "<br>";
    print_r($hombres);
    echo "<br>";
    print_r($mujeres);


    /*  ksort() -> Ordenar un array por sus claves de forma ascendente (< a >)*/
    echo "<br>";
    ksort($alumnoEmpresa);
    echo "<br>";
    print_r($alumnoEmpresa);

    /*  krsort() -> Ordenar un array por sus claves de forma descendente  (> a <)*/
    krsort($alumnoEmpresa);
    echo "<br>";
    print_r($alumnoEmpresa);


    /*   asort() ->Obtener la asociacion de los valores ordenados con sus claves originales  menor a mayor (< a >) */
    echo "<br>";
    asort($alumnoEmpresa);
    echo "<br>";
    print_r($alumnoEmpresa);

    /*   arsort() -> Ordenar un array manteniendo la asociacion de los valores ordenados con sus claves originales  de mayor a menor (> a <) */
    arsort($alumnoEmpresa);
    echo "<br>";
    print_r($alumnoEmpresa);


    echo "<br>";
    // Obtener una parte de un array indicando la posición.
    echo "<br>";
    print_r(array_slice($hombres,3,3));


    /*   Implode y Explode   */
    // Implode -> Convierte un array en un string.
    echo "<br>";
    $frase=["En","un","lugar","de","la","Mancha"];
    echo "<br>";
    print_r(implode(",",$frase));
    echo "<br>";
    var_dump($frase);

    //Explode -> Convierte un string en un array donde se le indica el elemento separador.
    echo "<br>";
    $sopa="Mi sopa contiene fideos,caldo,verduras,especias";
    print_r(explode(",",$sopa));



    /*   Arrays Bidimensionales   */
    echo "<br>";
    echo "<br>";
    $Agenda=["Dani"=>["Tlfno"=>"652487513","Email"=>"dani@ceatformacion.es"],"Sergio"=>["Tlfno"=>"652568842","Email"=>"sergio@ceatformacion.es"],"Ana"=>["Tlfno"=>"652562356","Email"=>"ana@ceatformacion.es"]];
    foreach ($Agenda as $clave => $valor){
        echo "Nombre del contacto: $clave";
        echo "<br>";
        foreach ($valor as $clave2 => $valor2){
            echo "$clave2: $valor2 ";
            echo "<br>";
        }
    }
?>



</body>
</html>



<?php
