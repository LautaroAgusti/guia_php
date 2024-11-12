<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura Condicional - If</title>
</head>
<body>
    <h1>Número Aleatorio en Español</h1>
    <?php
    // Genera un valor aleatorio entre 1 y 3
    $numero = rand(1, 3);

    // Imprimir el valor numérico y su equivalente en español
    echo "<p>El número generado es: $numero</p>";

    // Condicional para imprimir el número en texto
    if ($numero == 1) {
        echo "<p>El número en texto es: uno</p>";
    } elseif ($numero == 2) {
        echo "<p>El número en texto es: dos</p>";
    } elseif ($numero == 3) {
        echo "<p>El número en texto es: tres</p>";
    }
    ?>
</body>
</html>
