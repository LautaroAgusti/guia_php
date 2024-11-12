<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicación de Valores</title>
</head>
<body>
    <h2>Generar múltiplos de 11 hasta un límite</h2>
    <script>
        let base = 11;
        let iteracion = 0;
        while (iteracion < 25) {
            document.write('<p>Iteración ' + iteracion + ': ' + base + '</p>');
            iteracion++;
            base += 11;
        }
    </script>
</body>
</html>
