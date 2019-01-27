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
            <h1>Selección en PHP</h1>
            <table border="1">
                <tr>
                    <th>Ejercicio 4</th>
                </tr>
                <tr>
                <span class='msj'>
                    <td>
                        <?php
                        $edad = rand(1, 150);
                        echo "Número generado: " . $edad;
                        ?>
                    </td>
                </span>
                </tr>
                <tr>
                <span class='msj'>
                    <td>
                        <?php
                        switch ($edad) {
                            case $edad <= 11:
                                echo "Eres un niño.";
                                break;
                            case $edad >= 12 && $edad <= 17;
                                echo "Eres un adolescente.";
                                break;
                            case $edad >= 18 && $edad <= 35;
                                echo "Eres jóven.";
                                break;
                            case $edad >= 36 && $edad <= 65;
                                echo "Eres adulto.";
                                break;
                            case $edad >= 66 && $edad <= 110;
                                echo "Eres jubilado.";
                                break;
                            default:
                                echo "Edad no contemplada en nuestra encuesta.";
                        }
                        ?>
                    </td>
                </span>
                </tr>
            </table>
        </div>
    </body>
</html>

<!--4.-Selección en php

Usando la selección del tipo switch, haz un programa que genere una edad aleatoria entre 1 y 150 años y nos diga si somos 
niños (0-11) 
adolescentes (12-17) 
jóvenes (18-35) 
adultos (36-65) 
jubilados (66- ...)
La edad que no esté en el intevalo 0-110 años se visualizará 'edad no contenplada en nuestra encuesta'
Volver al index después de 2 segundos-->


