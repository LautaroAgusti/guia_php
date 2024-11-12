<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificación de un Número</title>
</head>
<body>
    <h2>Determinar si un número es positivo, negativo o cero</h2>
    <script>
        let numero = parseInt(prompt('Introduce un número: '));
        if (numero > 0) {
            document.write('<p>El número es positivo</p>');
        } else if (numero < 0) {
            document.write('<p>El número es negativo</p>');
        } else {
            document.write('<p>El número es igual a 0</p>');
        }
    </script>
</body>
</html>
