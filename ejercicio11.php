<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Matemáticas</title>
</head>
<body>
    <h2>Suma y multiplicación de cuatro números</h2>
    <script>
        let num1 = prompt('Ingrese el primer valor: ');
        let num2 = prompt('Ingrese el segundo valor: ');
        let num3 = prompt('Ingrese el tercer valor: ');
        let num4 = prompt('Ingrese el cuarto valor: ');
        let suma = parseInt(num1) + parseInt(num2) + parseInt(num3) + parseInt(num4);
        let multiplicacion = parseInt(num1) * parseInt(num2) * parseInt(num3) * parseInt(num4);
        document.write('<p>La suma de los valores es: ' + suma + '</p>');
        document.write('<p>El producto de los valores es: ' + multiplicacion + '</p>');
    </script>
</body>
</html>
