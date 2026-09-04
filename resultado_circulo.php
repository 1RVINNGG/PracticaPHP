<html>
<head>
    <title>Resultado - Círculo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="resultado">

<?php
// Se recibe el radio ingresado por el usuario
$radio = $_REQUEST['radio'];

// Se calculan el área y el perímetro
$area = pi() * pow($radio, 2);
$perimetro = 2 * pi() * $radio;

// Se limita el tamaño visual del círculo
$tamano = $radio * 20;

if ($tamano > 300) {
    $tamano = 300;
}

echo "<p>Radio: $radio</p>";
echo "<p>El área de la circunferencia es: " . round($area, 2) . "</p>";
echo "<p>El perímetro de la circunferencia es: " . round($perimetro, 2) . "</p>";

// Gráfica del círculo
echo "<div class='grafica'>
        <div class='circulo' style='width: {$tamano}px; height: {$tamano}px;'>
        </div>
      </div>";
?>

</div>

</body>
</html>