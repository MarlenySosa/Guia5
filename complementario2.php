<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Funciones anonimas </title>
</head>

<body>
<article style ="font-weight: bolder;" >
    <?php

        //Closure
        print ("EJEMPLO CLOSURE <br>");
        echo preg_replace_callback
        (
            '~-([a-z])~', function ($coincidencia) 
            {                
                return strtoupper($coincidencia[1]);
            }, 'Hola-mundo'
        );


        //lambda
        print ("<br><br><br> EJEMPLO LAMBDA");
        $saludo = function($nombre)
        {
            printf("<br>Hola %s ", $nombre);
        };
        
        $saludo('Mundo');
        // Imprimer Hola Mundo
        
        $saludo('PHP');
    ?> 
<article>
</body>
</html>