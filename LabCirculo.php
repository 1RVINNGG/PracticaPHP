<html>
<head>
    <title>Área y Perímetro del Círculo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Formulario que pide el radio de la circunferencia -->
    <form action="resultado_circulo.php" method="get">
        <p>Ingrese el radio de la circunferencia:
        <input type="number" step="any" min="0.01" name="radio" required></p>
        <p><input type="submit" value="Calcular"></p>
    </form>
</body>
</html>