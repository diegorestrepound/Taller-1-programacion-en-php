<?php
    
    
    $numeros = NULL;  
    echo "Los numeros del vector...<br />";
    for ($i = 0; $i < 5; $i++ ) {
        $numeros[$i] = mt_rand(1,100);
        echo $numeros[$i]. " ";
    }
    print "<br/><br />";

    $suma=0;
    foreach($numeros as $numero){
        $suma += $numero;
    }
    print "Suma: $suma";
?>