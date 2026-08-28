<?php
// Se reciben los datos enviados desde el formulario usando $_REQUEST
$nombre = $_REQUEST['nombre'];
$edad = $_REQUEST['edad'];

// Se muestran los datos recibidos en pantalla
echo "<p>Su nombre es: $nombre</p>";
echo "<p>Su edad es: $edad</p>";
?>