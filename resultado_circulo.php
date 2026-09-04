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

// pi() devuelve el valor de π, pow() eleva el radio al cuadrado
$area = pi() * pow($radio, 2);
$perimetro = 2 * pi() * $radio;

echo "<p>Radio: $radio</p>";
echo "<p>El área de la circunferencia es: $area</p>";
echo "<p>El perímetro de la circunferencia es: $perimetro</p>";
?>
</div>
</body>
</html>