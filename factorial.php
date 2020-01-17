<?php
    if(isset($_POST ["calcular"])){
        $numero = $_POST["txtnumero"];
        function obtenerFactorial($numero){
            $factorial=1;
            for($i=1; $i <= $numero; $i++){
                $factorial = $factorial * $i;
            }
            return $factorial;
        }
        $resultado=obtenerFactorial($numero);
        print "Factorial de $numero = $resultado";   
         
    }        
?>