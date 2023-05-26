<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<h2>Guardar alumno</h2>
    <form method="post" action="guardar_alumno.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br><br>
        
        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br><br>
        
        <input type="submit" value="Guardar">
    </form>

    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores del formulario
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];

        // Conectar a la base de datos
        $conexion = mysqli_connect("localhost", "usuario", "contraseña", "nombre_base_de_datos");

        // Verificar la conexión
        if (!$conexion) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        // Crear la consulta SQL para insertar los datos
        $sql = "INSERT INTO alumnos (nombre, apellido, edad) VALUES ('$nombre', '$apellido', '$edad')";

        // Ejecutar la consulta
        if (mysqli_query($conexion, $sql)) {
            echo "Alumno guardado exitosamente.";
        } else {
            echo "Error al guardar el alumno: " . mysqli_error($conexion);
            mysqli_close($conexion)
        }

    
    }
    ?>
</body>
</html>