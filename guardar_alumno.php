<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $edad = $_POST["edad"];
            $email = $_POST["email"];
          
          
            // Aquí puedes realizar cualquier validación o procesamiento adicional de los datos antes de guardarlos en algún lugar, como una base de datos.
          
            // Ejemplo de guardado en una base de datos ficticia:
            $conexion = mysqli_connect("localhost", "root", "", "nuevos_alumnos");
            $query = "INSERT INTO alumnos (nombre,apellido,edad,email) VALUES ('$nombre','$apellido,$edad,'$email)";
            
          
          
            // Puedes redirigir al usuario a una página de éxito o mostrar un mensaje de confirmación.
            echo "Alumno guardado exitosamente.";
          }

        // Cerrar la conexión
        mysqli_close($conexion);

   ?>     
