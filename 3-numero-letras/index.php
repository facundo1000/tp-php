<?php

/**
 * Escribir un programa en php que permita el ingreso de una cifra y como resultado muestra dicha cifra en letras.
 */

$numero = $_POST['number'];

if (is_string($numero)) {
    $parseNumber = (int) $numero;
}


switch ($parseNumber) {
    case 1:
        echo ("<h3>El numero ingresado es un UNO</h3>");
        break;

    case 2:
        echo ("<h3>El numero ingresado es un DOS</h3>");
        break;

    case 3:
        echo ("<h3>El numero ingresado es un TRES</h3>");
        break;

    case 4:
        echo ("<h3>El numero ingresado es un CUATRO</h3>");
        break;

    case 5:
        echo ("<h3>El numero ingresado es CINCO</h3>");
        break;

    case 6:
        echo ("<h3>El numero ingresado es SEIS</h3>");
        break;

    case 7:
        echo ("<h3>El numero ingresado es SIETE</h3>");
        break;

    case 8:
        echo ("<h3>El numero ingresado es OCHO</h3>");
        break;

    case 9:
        echo ("<h3>El numero ingresado es NUEVE</h3>");
        break;

    case 0:
        echo ("<h3>El numero ingresado es CERO</h3>");
        break;

    default:
        echo ("<h3><strong>Ingrese un solo numero entero mayor a cero y entre 0 y 10</strong></h3>");
        break;
}
