<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento desde GitHub</title>
</head>
<body>
    

<h1>Para probar, un cambio mas!!</h1>
<?php


    /* IF --- ELSEIF --- ELSE */
    $valor = !false;

    $comprobacion = false;

    $test;

    if ($valor == 1) {
        echo "El valor es 1-";
    }elseif ($valor == 2) {
        echo "El valor es 2+";
    } else {
        echo "El valor es ".$valor;
    }

    /* Uso práctico del NOT (!) */
    if (!$comprobacion) {
        //echo "La condicion es falsa!... sigamos en la siguiente configuracion";
    }

    if ($comprobacion == false) {
        $test = "ERROR"; 
        echo "HOLA";
    }
    else {
        $test = "OK"; 
        echo "CHAU";
    }
    
    $test2 = !$comprobacion ? "ERROR": "OK";


    
    
    echo "<br>".$test;
    
    $test2 = $comprobacion ? "OK" : "ERROR";

    echo "<br>".$test2;

?>

</body>
</html>