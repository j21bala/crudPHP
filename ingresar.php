<html>
<head>
    <title>Ingresar Libro</title>
</head>
<body>
    <header>
        <h1>Ingresa los datos del Libro</h1>
    </header>
    <form action='administrar_libro.php' method="post">
        <table>
            <tr>
                <td>Nombre libro:</td>
                <td> <input type='text' name='nombre'></td>
            </tr>
            <input type='hidden' name='insertar' value='insertar'>
        </table>
        <input type="submit" value='Guardar'>
        <a href="index.php">Volver</a>
    </form>
</body>
</html>