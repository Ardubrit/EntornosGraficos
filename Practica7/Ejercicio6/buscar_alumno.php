<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de ingreso por mail</title>
    <?php
    $servername = "localhost";
    $username = "Aletest";
    $password = "123456";
    $dbname = "base2";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ?>
</head>
<body>
    <h1>Buscar Alumno por Email</h1>
    <form action="" method="get">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Buscar</button>
    </form>
    <?php
    if (isset($_GET['email'])) {
        $email = $_GET['email'];
        $email = $conn->real_escape_string($email);
        $sql = "SELECT codigo, nombre, codigocurso, mail FROM alumnos WHERE mail = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Obtener la primera fila de resultados
            $row = $result->fetch_assoc();
            // Asignar el nombre a una variable de sesión
            $_SESSION['nombre'] = $row["nombre"];
        } else {
            echo "0 resultados";
        }
    }
    // Cerrar la conexión
    $conn->close();
    ?>
    <a href="pagina_ingreso.php">Ingresar</a>
</body>
</html>