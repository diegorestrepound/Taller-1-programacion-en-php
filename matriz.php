<?php

    $nros_a_generar = 9;
    $numeros = NULL;  
    echo "Los numeros del array...<br />";
    for ($i = 0; $i < $nros_a_generar; $i++ ) {
        $numeros[$i] = mt_rand(1,100);
        echo $numeros[$i]. " ";
    }
    print "<br/><br />";
    print "Clasificando los impares arriba y los pares abajo...<br /><br />";
    $comimpares = 0;
    $finalpares = $nros_a_generar - 1;
    $numeros_clasificados = NULL;
    for ($i=0; $i < $nros_a_generar; $i++) {
        if ( ($numeros[$i] % 2) == 0) {  
            $numeros_clasificados[$finalpares--] = $numeros[$i];
        }
        else {
            $numeros_clasificados[$comimpares++] = $numeros[$i];
        
        }
    }
    print "Los numeros del array despues de la clasificacion...<br />";
    for ($i=0; $i < $nros_a_generar; $i++) {
        echo $numeros_clasificados[$i]." "."<br>";
    }
?>
