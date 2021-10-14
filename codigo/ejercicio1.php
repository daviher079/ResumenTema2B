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
        <h1>Ejercicio 1 David Vicenteb</h1>
    </header>

    <main>
    
<?php
    $pagina=basename($_SERVER['SCRIPT_FILENAME']);//Muestra la ruta donde se ubica el fichero
    echo "<h2 class='resultado'>a. Muestra el nombre del fichero que se está ejecutando: ", $pagina,"</h2>";
    $miIP=$_SERVER['REMOTE_ADDR'];//REMOTE_ADDR Muestra la ip del equipo que accede
    echo"<h2 class='resultado'>b. Muestra la dirección IP del equipo desde el que estás accediendo. ", $miIP,"</h2>";
    $miRuta=$_SERVER['PHP_SELF'];//Esta función muestra unicamente el nombre del fichero que se está ejecutando
    echo "<h2 class='resultado'>c. Muestra el path donde se encuentra el fichero que se está ejecutando.", $miRuta,"</h2>";

    $fechaenSegundo=time();//la función time() devuelve los segundos que han pasado desde el 1/1/1970 hasta la actualidad
    date_default_timezone_set("Europe/Madrid");//Función para cambiar la hora del servidor
    $fechaActual=date('y-m-d h:i:s', $fechaenSegundo);//la función date devuelve la fecha formateada. En el primer parametro se le pasa el formato con el que se muestra la fecha en el segundo la fecha a la que se le quiere dar formato
    echo "<h2 class='resultado'>d. Muestra la fecha y hora actual formateada en 'y-m-d h:i:s' ", $fechaActual, "</h2>" ;

    date_default_timezone_set("Europe/Lisbon");

    $variablePorto=getdate();//Devuelve un array con la fecha del momento actual 

    echo "<h2 class='resultado'>e. Muestra la fecha y hora actual en Oporto formateada en (día de la semana, día de 
    mes de año, hh:mm:ss , Zona horaria). ", 
    $variablePorto['weekday']/*Dia de la semana*/,", ", $variablePorto['mday']/*Dia de mes */,". ", 
    $variablePorto['month']/*Mes del año*/ ,". A las ",$variablePorto['hours']/*Horas */,":", 
    $variablePorto['minutes']/*Minutos*/,":", $variablePorto['seconds']/*Segundos */,"</h2>";

    date_default_timezone_set("Europe/Madrid");

    $sesentaDiasDespues= date('d-m-y h:i:s', strtotime("+60 days"));//La función strtotime() se le puede sumar cualquier parametro de tiempo a la fecha actual 

    echo "<h2 class='resultado'>g. Calcular la fecha y el día de la semana de dentro de 60 días. ", $sesentaDiasDespues,"</h2>";


    $variablePorto=getdate();
    
    echo "e. Muestra la fecha y hora actual en Oporto formateada en (día de la semana, día de 
    mes de año, hh:mm:ss , Zona horaria). ", 
    $variablePorto['weekday'],", ", $variablePorto['mday'],". ", 
    $variablePorto['month'],". A las ",$variablePorto['hours'],":", 
    $variablePorto['minutes'],":", $variablePorto['seconds'],"<br/>";

    date_default_timezone_set("Europe/Madrid");
    
    $sesentaDiasDespues= date('d-m-y h:i:s', strtotime("+60 days"));

    echo "g. Calcular la fecha y el día de la semana de dentro de 60 días. ", $sesentaDiasDespues;


?>    
    </main>
    
    <footer>

        <a href="ejercicio3.php?ficheroPHP=<?php
            $pagina=basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;
        ?>"><img src="../web-root/img/gafas-de-sol.png" height="100px"></a>
        <p>© David Vicente</p>
        <a href="../index.html" class="volver"><img src="../web-root/img/volver.png" height="50px"></a>
    </footer>
 
</body>
</html>











    