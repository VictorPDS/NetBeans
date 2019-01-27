<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./css/estilo.css" type="text/css">
        <title>VÍCTOR PRADILLA DIESTE</title>

    <body>
        <?php        
        function funcion(&$a, $b) {  
            global $vglobal;
            $vglobal = $b;
                    
            print 'Valor de los parámetros, a=' . $a . ', b=' . $b .'<br/>';
                        
            $a = $a*2;
            $b= $b*2;
            
            print 'Valores después de duplicar parámetros a=' . $a . ', b=' . $b .'<br/>';
            print 'Valor de la variable global ' .$vglobal;
            
            if ($a > $b) {
                return $a;
            } else {
                return $b;
            }
        }
        
        ?>  
        <div class="contenedor">
            <h1>Funciones en PHP</h1>
            <table border="1">
                <tr>
                    <th>Ejercicio 7</th>
                </tr>
                <tr>
                <span class='msj'>
                    <td><?php
                        //1. Crea dos valores en variables
                        $var1 = 5;
                        $var2 = 7;
                        
                        //2.-Visualiza sus valores
                        print 'Antes de invocar a la función mostramos valores, Variable1=' . $var1 . ', Variable2=' . $var2 . '<br/>';
                        ?>
                    </td>
                </span>
                </tr>
                <tr>
                <span class='msj'>
                    <td><?php
                        //3.-Invoca a la función
                        //4.-Visualiza los valores de los parámetros
                        //5.-Hace lo especificado
                        //6.-Visualiza los valores
                        funcion($var1, $var2); 
                        ?>
                    </td>
                </span>
                </tr>
                <tr>
                <span class='msj'>
                    <td><?php
                        print 'Después de invocar a la función mostramos valores, Variable1=' . $var1 . ', Variable2=' . $var2;
                        ?>
                    </td>
                </span>
                </tr>
            </table>
        </div>
    </body>
</html>