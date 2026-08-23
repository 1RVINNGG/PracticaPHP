<?php
$radio = $_REQUEST['radio'];

$area = pi() * pow($radio, 2);
$perimetro = 2 * pi() * $radio;

echo "<p>Radio: $radio</p>";
echo "<p>El área de la circunferencia es: $area</p>";
echo "<p>El perímetro de la circunferencia es: $perimetro</p>";
?>