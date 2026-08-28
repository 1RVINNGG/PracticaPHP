<?php
// Se recibe el valor de pulgadas enviado desde el formulario
$pulgadas = $_REQUEST['pulgadas'];

// Conversión: 1 pulgada equivale a 2.54 centímetros
$centimetros = $pulgadas * 2.54;

echo "<p>$pulgadas pulgadas equivalen a $centimetros centímetros.</p>";
?>