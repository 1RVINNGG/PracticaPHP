
<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>

    <!-- Enlazamos el archivo CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php  

// Cadena de texto (string) que contiene el nombre del primer autor 
$author1 = "John Doe";  

// Cadena de texto (string) que contiene el nombre del segundo autor 
$author2 = "Max Mustermann";  

// Mostramos un título y un párrafo en la página web.
// Se utilizan las cadenas almacenadas en $author1 y $author2.
echo "<div class='contenedor'>
        <h1>Hello World!</h1>
        <p>This dynamic web page was created by $author1 and $author2.</p>
      </div>";

?>

</body>
</html>
```
