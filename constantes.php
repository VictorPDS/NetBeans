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
            <h1>Constantes en PHP</h1>
            <table border="1">
                <tr>
                    <th>Ejercicio 2</th>
                </tr>
                <tr>
                <span class='msj'>
                    <td>
                        <?php
                        define("Edad", 23);
                        echo "Tengo " . Edad . " años.";
                        ?>
                    </td>
                </span>
                </tr>
                <tr>
                <span class='msj'>
                    <td><?php
                        $diferencia = 100 - Edad;
                        echo "Me quedan " . $diferencia . " años para cumplir 100 años.";
                        ?>
                    </td>
                </span>
                </tr>
            </table>
        </div>
    </body>
</html>

<!--2.-Constantes en php

Haz un ejercicio donde definas la constante edad
A la constante Edad le asignas tu edad.
Luego visualiza los años que tienes y los años que te quedan para cumplir 100 años
Volver al index después de 2 segundos*-->
