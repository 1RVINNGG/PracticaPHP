<?php
$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division_redondeada = round($num1 / $num2, 2);

echo "<p>Suma: $suma</p>";
echo "<p>Resta: $resta</p>";
echo "<p>Multiplicación: $multiplicacion</p>";
echo "<p>División redondeada a 2 decimales: $division_redondeada</p>";
?>