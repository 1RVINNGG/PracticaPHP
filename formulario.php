<html>
<head>
    <title>Formulario de entrada del dato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Formulario que envía los datos por método POST a pagina2.php -->
    <form method="post" action="pagina2.php">
        Ingrese su nombre:
        <input type="text" name="nombre" id="nombre" required minlength="2">
        <br> <br>
        Ingrese su Edad:
        <input type="number" name="edad" id="edad" required min="1" max="120">
        <br> <br>
        <input type="submit" value="confirmar">
    </form>
</body>
</html>