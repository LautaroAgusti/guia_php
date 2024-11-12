<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variables</title>
</head>
<body>
    <h1>Ejemplo de Tipos de Variables en PHP</h1>
    <?php
    // Definicion de variables
    $entero = 42;              // Tipo Integer
    $decimal = 3.1416;          // Tipo Double
    $texto = "Hola, Mundo!";    // Tipo String
    $booleano = true;           // Tipo Boolean

    // Imprimir las variables, una por linea
    echo "<p>El valor del entero es: $entero</p>";
    echo "<p>El valor del decimal es: $decimal</p>";
    echo "<p>El valor del texto es: $texto</p>";

    // Imprimir el valor booleano (como true or false)
    echo "<p>El valor del booleano es: " . ($booleano ? "true" : "false") . "</p>";
    ?>
</body>
</html>
