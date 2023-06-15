<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bissnes";
try {
    // Crear una conexión
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener los datos enviados por POST
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    // Preparar y ejecutar la consulta de actualización
    $sql = "UPDATE usuario SET nombre = :nombre, apellido = :apellido WHERE documento = 1"; // Ajusta la consulta según tu estructura de base de datos y criterios de actualización
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->execute();

    echo "Datos actualizados exitosamente";
} catch(PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h1>Formulario actualizar datos</h1>
 </body>
 </html>