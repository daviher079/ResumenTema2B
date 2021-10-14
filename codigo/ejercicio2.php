
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="../web-root/css/resetCSS.css">
    <link rel="stylesheet" href="../web-root/css/CSSEjercicio2.css">
</head>
<body>
    <header>
        <h1>Ejercicio 2 David Vicente</h1>
    </header>

    <main>
    <?php

//Para mostrar los fallos en el navegador se busca el fichero php.ini
//que esta en la ruta /etc/php/7.4/cli y se busca el valordisplay_errors
//Inicialmente se encuentra en Off se cambiará On


/*
Se recoge el valor almacenado en la variable del enlace ejercicio2 por metodo GET 
y se almacena en $variable 
*/
$variable=$_GET['miVariable'];


/*
    Si el valor que se le ha pasado es integer o float se le suma 0 para convertirlo 
    en un valor entero o float
*/

if(is_float($variable) || is_numeric($variable))
{  
    $variable+=0;
}

/*
    Primero se comprueba si el valor es un String despues se comprueba si es float
    y por ultimo si no es float o string se entiende que es entero
*/

if(is_string($variable))
{
    echo"<h2 class='resultado'>Es una variable de tipo ", gettype($variable),"</h2>";
}elseif(is_float($variable))
{
    echo"<h2 class='resultado'>Es una variable de tipo ", gettype($variable),"</h2>";
}else
{
    echo"<h2 class='resultado'>Es una variable de tipo ", gettype($variable),"</h2>";
}


?>
    </main>
    
    <footer>
        <!--
            Se envia la ubicación del ejercicio2 mediante la funcion basename($_SERVER['SCRIPT_FILENAME']);
        -->
        <a href="ejercicio3.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="../web-root/img/gafas-de-sol.png" height="100px"></a>
        <p>© David Vicenteb</p>
        <a href="../index.html" class="volver"><img src="../web-root/img/volver.png" height="50px"></a>
    </footer>
    
    
    
    
    
    


</body>
</html>


<?
    

    $pruebas=$_GET['valor'];

?>