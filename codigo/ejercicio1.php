<?
    //a. Muestra el nombre del fichero que se está ejecutando

    $pagina=basename($_SERVER['SCRIPT_FILENAME']);
    echo "a. Muestra el nombre del fichero que se está ejecutando: ", $pagina,"<br/>";
    $miIP=$_SERVER['REMOTE_ADDR'];
    echo"b. Muestra la dirección IP del equipo desde el que estás accediendo. ", $miIP,"<br/>";
    $miRuta=$_SERVER['PHP_SELF'];
    echo "c. Muestra el path donde se encuentra el fichero que se está ejecutando.", $miRuta,"<br/>";

    $fechaenSegundo=time();
    date_default_timezone_set("Europe/Madrid");
    $fechaActual=date('y-m-d h:i:s', $fechaenSegundo);
    echo "d. Muestra la fecha y hora actual formateada en 'y-m-d h:i:s' ", $fechaActual, "<br/>" ;

    date_default_timezone_set("Europe/Lisbon");
    print_r(getdate());

    $variablePorto=getdate();
    $variablePorto['weekday'];
    $variablePorto['mday'];
    $variablePorto['mon'];
    $variablePorto['hours'];
    $variablePorto['minutes'];
    $variablePorto['seconds'];

    

    echo "Muestra la fecha y hora actual en Oporto formateada en (día de la semana, día de 
    mes de año, hh:mm:ss , Zona horaria). " ;
    
    //date con la e mira la franja horaria
?>    

    