<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables de tipo String</title>
</head>
<body>
    <h1>Ejemplo de String con Variables Enteras</h1>
    <?php
    // Definir tres variables enteras
    $numero1 = 15;
    $numero2 = 30;
    $numero3 = 45;

    // Definir un string que incorpore dichas variables
    $mensaje = "Los valores de las variables son: $numero1, $numero2 y $numero3.";

    // Imprimir el string con las variables sustituidas
    echo "<p>$mensaje</p>";
    ?>
</body>
</html>
