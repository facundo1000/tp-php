<?php
$num = (int) $_POST['number'];
echo ("<h1>Tabla de Multiplicar del numero: $num</h1>");
for ($i = 0; $i <= 10; $i++) {
    $numero = $num * $i;
    echo ("<p>$i x $num = $numero</p>");
    $numero = 0;
}
