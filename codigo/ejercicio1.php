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

    