<!DOCTYPE html>
<html lang="es"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv = "content-type" content = "text / html; charset=utf-8">
        <title> Taller 1 php </title>
    </head>
    <body>
        <div id="body">
                    
            <H1>algoritmo 1: </H1> 
            <p>Elaborar un algoritmo que permita obtener la factorial de un numero. </p> 
            <form name = "form 1"  method = "POST" action="factorial.php">
                <label>Numero:</label>
                <input type ="text" name="txtnumero" placeholder="Escribe un numero*" required>
                <br>
                <br>
                <input type="submit" name="calcular" value="Calcular">
            </form>

            <br>
            <br>
            <br>
            <br>

            <H1>algoritmo 2: </H1> 
            <p>Se desea conocer para un grupo de 10 personas, el total de personas por<br>
            rango de edades. Los rangos son los siguientes: 0-20, 20-30, 40-60 y mayores<br>
            de 60. Elabore un programa que permita mostrar los totales respectivos de<br>
            cada rango. </p> 
            <form name = "form 2"  method = "POST" action="edad.php">
                
            </form>

            <br>
            <br>
            <br>
            <br>

            <H1>algoritmo 3: </H1>
            <p> Sumar todos los elementos de un vector de tamaño 5
            </p>
            <form name = "form 3"  method = "POST" action="vector.php">
                <input type="submit" name="calcular" value="Calcular">
            </form>

            <br>
            <br>
            <br>
            <br>
            <H1>algoritmo 4: </H1>
            <p>
            Crear 2 vectores, en uno almacene los números pares y en el otro los números<br>
            impares-. Luego muestre ambos vectores.

            </p>
            <form name = "form 4"  method = "POST" action="matriz.php">
                <input type="submit" name="calcular" value="Separar">       
            </form>
        
        </div>
        























       <!-- ************************************************************************************************************ -->
        
        <style>
            
            body{
                background:url(images/textura2.png) ;
                background-repeat: repeat;
                background-attachment: fixed;
                
            }
            #body{
                text-align: center;
                font-size: 20px;
                position: relative;
                bottom: 8%;
                margin: 20px auto;
                
            }
            
            form{
               
                width: 500px;
                border: 1px solid #ccc;
                margin: 0 auto;
                padding: 20px;
                background: rgba(179, 179, 233, 0.78);
                
            }
            label{
                font-size: 16px;
                display: block;
                width: 90%;
            }
            input{
                margin-bottom: 10px;
                width: 80%;
                padding: 10px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                border: 1px solid #ccc;
            }
            input:focus{
                border:1px solid rgb(4, 0, 253);

            }
            input[type="submit"]{
                margin-bottom: 0;
                background: #1668c4;
                color:#fff;
                border:none; 
                box-shadow: 5px 5px 15px #042346;
            }

            input[type="submit"]:hover{
                background: #114a8b;
                box-shadow: 3px 3px 15px #042346;
                cursor:pointer;
            }
            label{
                text-align: left;
                margin: 0px 55px;
            }


		

		
		

		
		

        </style>   
    </body>
</html>