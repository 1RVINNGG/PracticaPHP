<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// Validación: el nombre no debe estar vacío y la edad debe ser un número válido
if (!isset($_REQUEST['nombre']) || trim($_REQUEST['nombre']) === '' ||
    !isset($_REQUEST['edad']) || !is_numeric($_REQUEST['edad'])) {
    echo '<div class="error">Error: debe ingresar un nombre y una edad válidos.</div>';
} else {
    $nombre = htmlspecialchars($_REQUEST['nombre']);
    $edad = $_REQUEST['edad'];

    // ucwords() pone en mayúscula la primera letra de cada palabra
    // (así "irving cruz" se convierte en "Irving Cruz")
    $nombre = ucwords(strtolower($nombre));

    echo '<div class="resultado">';
    echo "<p>Su nombre es: $nombre</p>";
    echo "<p>Su edad es: $edad</p>";
    echo '</div>';
}
?>
</body>
</html>