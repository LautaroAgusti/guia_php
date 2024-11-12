<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de Notas</title>
</head>
<body>
    <h2>Evaluación del promedio de un estudiante</h2>
    <script>
        let nota1 = parseInt(prompt('Escribe la primera nota: '));
        let nota2 = parseInt(prompt('Escribe la segunda nota: '));
        let nota3 = parseInt(prompt('Escribe la tercera nota: '));
        let promedio = (nota1 + nota2 + nota3) / 3;
        if (promedio >= 7) {
            document.write('<p>¡Aprobado!</p>');
        } else {
            document.write('<p>No aprobado</p>');
        }
    </script>
</body>
</html>
