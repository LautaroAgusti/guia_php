<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada de Datos</title>
</head>
<body>
    <h2>Solicitar información al usuario</h2>
    <script>
        let nombre = prompt('Escribe tu nombre: ');
        let sueldo = prompt('Escribe tu salario: ');
        document.write('<p>Hola, ' + nombre + ', tu salario es: ' + sueldo + '</p>');
    </script>
</body>
</html>
