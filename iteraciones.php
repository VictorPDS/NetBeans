<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./css/estilo.css" type="text/css">
        <title>VÍCTOR PRADILLA</title>

    <body>
        <?php
         header("Refresh:2; url=index.php");
         
         //EN CASO DE SER LOS NÚMEROS PARES UNICAMENTE TENIENDO EN CUENTA DE 0 A 100
        $suma=0;
        for($i=1;$i<100;$i++){ 
            if ($i%2==0) {
                $suma += $i;
            }
        }
        
        //EN CASO DE SER LOS 100 PRIMEROS NUMEROS PARES
        $suma1=0;
        $contador=1;
        $par = 2;
        
        while ($contador <= 100):
        $suma1 = $suma1 + $par;
        $contador += 1;
        $par += 2;
        endwhile;
        ?>  
        <div class="contenedor">
            <h1>Iteraciones en PHP</h1>
            <table border="1">
                <tr>
                    <th>Ejercicio 6</th>
                </tr>
                <tr>
                <span class='msj'>
                    <td><?php
                        print "El resultado de la suma de los número pares comprendidos entre 0 y 100 es $suma</br>"; 
                        print "El resultado de la suma de los 100 primeros números pares es $suma1</br>"; 
                        ?>
                    </td>
                </span>
                </tr>
            </table>
        </div>
    </body>
</html>

<!--6.-Iteraciones en php

Suma los 100 primeros números pares
Volver al index después de 2 segundos-->
