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
        ?>  
        <div class="contenedor">
            <h1>Operador Ternario en php</h1>
            <table border="1">
                <tr>
                    <th>Ejercicio 5</th>
                </tr>
                <tr>
                <span class='msj'>
                    <td>
                        <?php
                        $numRan = rand(1, 1000);
                        echo "Número generado " . $numRan;
                        ?>
                    </td>
                </span>
                </tr>
                <tr>
                <span class='msj'>
                    <td>
                        <?php
                        $tipo = ($numRan%2==0) ? "El número " . $numRan . " es par." : "El número " . $numRan . " es impar.";
                        echo $tipo;
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


