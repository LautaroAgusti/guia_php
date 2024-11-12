<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vectores Asociativos</title>
</head>
<body>
    <h2>Almacenamiento de claves de usuarios</h2>
    <script>
        // Definir un vector asociativo con claves de usuarios
        let usuarios = {
            "usuario1": "clave123",
            "usuario2": "segura456",
            "usuario3": "admin789",
            "usuario4": "guest111",
            "usuario5": "root222"
        };

        // Acceder a una clave específica
        let claveUsuario3 = usuarios["usuario3"];

        // Imprimir el valor de una clave específica
        document.write('<p>La clave del usuario3 es: ' + claveUsuario3 + '</p>');
    </script>
</body>
</html>
