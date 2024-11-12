<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perímetro de un Cuadrado</title>
</head>
<body>
    <h2>Calcular el perímetro de un cuadrado</h2>
    <script>
        let lado = prompt('Introduce la medida del lado del cuadrado (en cm):');
        let perimetro = parseInt(lado) * 4;
        document.write('<p>El lado del cuadrado mide ' + lado + ' cm</p>');
        document.write('<p>El perímetro total del cuadrado es ' + perimetro + ' cm</p>');
    </script>
</body>
</html>
