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
        header("Refresh:5; url=index.php");
                        
                        define("num", 123);
                        $v1 = num;
                        define("string", "Víctor");
                        $v2 = string;
                        define("hex", 0xAdB34);
                        $v3 = hex;
                        define("bin", 0b1100010);
                        $v4 = bin;
                        $expresion = 4*(3+2);
                        $v5 = $expresion;
                        $cadcar = 'abc' . 'def';
                        $v6 = $cadcar;
                        function saludo() {
                            return 'hola';
                        }
                        $v7 = saludo();
                        $v8 = ($num = 4) + 5;
        ?>  
        <div class="contenedor">
            <h1>Asignación en PHP</h1>
            <table border="1">
                <tr>
                    <th>Ejercicio 3</th>
                </tr>
                <tr><span class='msj'><td><?php print $v1 . '  se toma el valor de la constante num=123'; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v2 . '  se toma el valor de la constante string=Víctor'; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v3 . '  se toma el valor de la constante hex=0xAdB34'; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v4 . '  se toma el valor de la constante bin=0b1100010'; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v5 . '  se toma el valor de la expresion 4*(3+2)'; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v6 . '  se toma el valor de abc . def'; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v7 . '  se toma el valor que devuelve la función saludo (hola)'; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v8 . '  se toma el valor que genera la expresión de la asignación ($num = 4) + 5';?></td></span></tr>
            </table>
        </div>
    </body>
</html>

<!--2.-Asignación en php

Asigna a una variable valores de diferente procedencia
Un valor constante numérico
Un valor constante string
Un valor constante numérica con valor hexadecimal
Un valor constante numérica con valor binario
Un valor de una expresión numérica
Un valor de una expresión de cadena de caracteres
Un valor que devuelva una función , por ejemplo la función print
El valor de una expresión que sea una asignación
Visualiza luego los valores especificando de dónde viene su valor
Volver al index después de 5 segundos-->
