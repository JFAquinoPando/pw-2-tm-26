<?php
    /* Switch */

    $lenguaje = "PYTHON";
    switch ($lenguaje) {
        case 'PHP':
        case 'CSS':
        case 'HTML':
        case 'JS':
            echo 'Es un lenguaje usado para el ámbito web!';
            break;
        default:
            echo "<br>{$lenguaje}: Es un lenguaje usado para otros propósitos";
            break;
    }

    $webLangs = [
        'PHP',
        'CSS',
        'HTML',
        'JS'
    ];

    if (in_array($lenguaje, $webLangs)) {
        echo '<br> *Es un lenguaje usado para el ámbito web!';
    }else{
        echo "<br> *{$lenguaje}: Es un lenguaje usado para otros propósitos";
    }