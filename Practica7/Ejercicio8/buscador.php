<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $dbname = "prueba";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Error de conexión: " . $conn->connect_error);
    }
    $cancion = $_POST['cancion'];

    $resultados=mysqli_query($conn,"SELECT * from buscador where canciones LIKE '%" . $cancion . "'");

    while($fila = mysqli_fetch_array($resultados))
    {
    ?>
    <tr>
    <td><?php echo ($fila[0]); ?></td>
    </tr>
    <tr>
    <td colspan="5">
    <?php
    }
    $conn->close();
  ?>
</body>
</html>