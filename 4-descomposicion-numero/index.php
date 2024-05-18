<?php

/**
 * Escribir un programa en php que permita ingresar un número y que permita la descomposición del número en unidad, decena, centena, etc.
 */


// Función para descomponer un número en unidades, decenas, centenas, etc.
function descomponerNumero($numero)
{
    $digitos = str_split(strrev($numero)); // Convierte el número a una cadena, lo revierte y lo divide en un array de caracteres
    $unidades = [
        "Unidad",
        "Decena",
        "Centena",
        "Unidad de mil",
        "Decena de mil",
        "Centena de mil",
        "Unidad de millón"
    ];

    $resultado = [];
    foreach ($digitos as $indice => $digito) {
        $resultado[] = $unidades[$indice] . ": " . $digito;
    }

    return array_reverse($resultado); // Revertimos nuevamente para tener el orden correcto
}

// Manejo de la entrada del formulario y descomposición del número
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST["number"]);
    $resultado = descomponerNumero($number);
    echo "<h3>Descomposición del número $number:</h3>";
    echo "<ul>";
    foreach ($resultado as $linea) {
        echo "<li>$linea</li>";
    }
    echo "</ul>";
}
