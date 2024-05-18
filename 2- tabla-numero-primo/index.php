<?php

/**
 * Escribir un programa en php que permita el ingreso un número cualquiera y 
 * mostrar en una tabla de 4 x 4 los 16 siguientes números primos de dicho número. 
 * La carga de la tabla debe ser por fila. 
 */

// Función para determinar si un número es primo
function esPrimo($numero)
{
    if ($numero < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Función para encontrar los siguientes 16 números primos a partir de un número dado
function encontrarPrimos($numero)
{
    $primos = [];
    $contador = 0;
    $numero++;

    while ($contador < 16) {
        if (esPrimo($numero)) {
            $primos[] = $numero;
            $contador++;
        }
        $numero++;
    }

    return $primos;
}

// Manejo de la entrada del formulario y generación de la tabla
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);
    $primos = encontrarPrimos($numero);
    echo "<h3>Tabla de los siguientes 16 números primos a partir de $numero:</h3>";
    echo "<table border='1'>";
    for ($i = 0; $i < 4; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 4; $j++) {
            echo "<td>" . $primos[$i * 4 + $j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
