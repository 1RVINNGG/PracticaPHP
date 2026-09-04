<html>
<head>
    <title>Resultado - Pulgadas a Centímetros</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="resultado">

<?php
// Se recibe el valor de pulgadas enviado desde el formulario
$pulgadas = $_REQUEST['pulgadas'];

// Conversión: 1 pulgada equivale a 2.54 centímetros
$centimetros = $pulgadas * 2.54;

// Mostramos el resultado
echo "<p>$pulgadas pulgadas equivalen a " . round($centimetros, 2) . " centímetros.</p>";

// Valor agregado: regla visual
echo "
<div class='regla'>
    <div class='escala'>
        <span>0 cm</span>
        <span>1 cm</span>
        <span>2 cm</span>
        <span>3 cm</span>
        <span>4 cm</span>
        <span>5 cm</span>
        <span>6 cm</span>
        <span>7 cm</span>
        <span>8 cm</span>
        <span>9 cm</span>
        <span>10 cm</span>
    </div>
</div>

<p class='conversion'>
    1 pulgada = 2.54 cm
</p>
";
?>

</div>

</body>
</html>