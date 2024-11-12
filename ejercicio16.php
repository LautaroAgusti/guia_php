<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Mínimo</title>
</head>
<body>
    <h2>Determinar el número más pequeño</h2>
    <script>
        function minimo(num1, num2, num3) {
            return Math.min(num1, num2, num3);
        }
        let n1 = parseInt(prompt("Escribe el primer número: "));
        let n2 = parseInt(prompt("Escribe el segundo número: "));
        let n3 = parseInt(prompt("Escribe el tercer número: "));
        let menor = minimo(n1, n2, n3);
        document.write('<p>El menor número es: ' + menor + '</p>');
    </script>
</body>
</html>
