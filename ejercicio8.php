<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar del 2</title>
</head>
<body>
    <h1>Tabla de Multiplicar del 2</h1>

    <h2>Usando el bucle for</h2>
    <?php
    // Tabla de multiplicar del 2 usando for
    for ($i = 1; $i <= 10; $i++) {
        $resultado = 2 * $i;
        echo "<p>2 x $i = $resultado</p>";
    }
    ?>

    <h2>Usando el bucle while</h2>
    <?php
    // Inicializar variable
    $j = 1;

    // Tabla de multiplicar del 2 usando while
    while ($j <= 10) {
        $resultado = 2 * $j;
        echo "<p>2 x $j = $resultado</p>";
        $j++;
    }
    ?>

    <h2>Usando el bucle do/while</h2>
    <?php
    // Inicializar variable
    $k = 1;

    // Tabla de multiplicar del 2 usando do/while
    do {
        $resultado = 2 * $k;
        echo "<p>2 x $k = $resultado</p>";
        $k++;
    } while ($k <= 10);
    ?>
</body>
</html>
