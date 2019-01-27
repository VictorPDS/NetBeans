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
        ?>  
        <div class="contenedor">
            <h1>Variables en PHP</h1>
            <table border="1">
                <tr>
                    <th>Ejercicio 1</th>
                </tr>

                <?php
                $v1 = 1994;
                $v2 = 01234;
                $v3 = 0xAdB34;
                $v4 = 0b1100;
                $v5 = "Hola Víctor";
                $v6 = 'Hola de nuevo Víctor';
                $v7 = <<<FINAL
                        Hola
                        otra vez
                        amigo                        
FINAL;
                $v8 = <<< FIN
<pre>
     Hola a todos
¿qué tal? espero
    que muy bien
</pre>
FIN;
                $v9 = 1.2342343412302301231;
                $v10 = 9865E-2;
                $v11 = null;
                $v12 = true;
                $v13 = false;
                ?>

                <tr><span class='msj'><td><?php print $v1; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v2; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v3; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v4; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v5; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v6; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v7; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v8; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v9; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v10; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v11; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v12; ?></td></span></tr>
                <tr><span class='msj'><td><?php print $v13; ?></td></span></tr>
            </table>
        </div>
    </div>
</body>
</html>



<!--Este programa asignará los siguientes valores a variables y luego lo visualizará
125;
0874;
0xAbC12;
0b1100;
"Esto es una cadena de caracteres";
'Esto es otra cadena de caracteres';
               Esto es una cadena
               multilínea
               y termina aquí
                Esto es una cadena
               multilínea
               y termina aquí
1.23432230003322014000002234101;
1234E-2;
null;
true;
false;-->