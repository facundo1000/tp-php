<?php

// Función para convertir un número binario a decimal
function binarioADecimal($binario)
{
    return bindec($binario);
}

// Función para convertir un número decimal a hexadecimal
function decimalAHexadecimal($decimal)
{
    return dechex($decimal);
}

// Manejo de la entrada del formulario y conversión de números
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $binario = $_POST["number"];
    // Validar que el input sea un número binario
    if (is_string($binario)) {
        $decimal = binarioADecimal($binario);
        $hexadecimal = decimalAHexadecimal($decimal);
        echo "<h3>Resultados para el número binario $binario:</h3>";
        echo "<p>Decimal: $decimal</p>";
        echo "<p>Hexadecimal: $hexadecimal</p>";
    } else {
        echo "<p style='color:red;'>Por favor, ingrese un número binario válido.</p>";
    }
}
