<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traducir Palabras</title>
</head>
<body>
    <h2>Traducir palabras comunes</h2>
    <script>
        let palabra = prompt('Escribe una palabra (casa, mesa, perro, gato): ');
        switch (palabra) {
            case 'casa':
                document.write('<p>Traducción: house</p>');
                break;
            case 'mesa':
                document.write('<p>Traducción: table</p>');
                break;
            case 'perro':
                document.write('<p>Traducción: dog</p>');
                break;
            case 'gato':
                document.write('<p>Traducción: cat</p>');
                break;
            default:
                document.write('<p>Palabra no reconocida</p>');
                break;
        }
    </script>
</body>
</html>
