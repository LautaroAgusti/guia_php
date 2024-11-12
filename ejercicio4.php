<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatorio</title>
</head>
<body>
    <h1>Número Aleatorio</h1>
    <?php
        // Genera el numero aleatorio entre 1 y 100
        $num = rand(1, 100);

        // Muestra el numero que genero
        echo "<p>El número generado es: $num</p>";

        // Tiene en cuenta si es mayor o menor
        if ($num <= 50) {
            echo "<p>El número es menor o igual a 50.</p>";
        } else {
            echo "<p>El número es mayor a 50.</p>";
        }
    ?>
</body>
</html>
