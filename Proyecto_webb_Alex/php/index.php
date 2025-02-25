<?php
$servername = "db";
$username = "alex";
$password = "P@ssw0rd";
$dbname = "carconnect";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM users ORDER BY id DESC LIMIT 5");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Usuario</title>
</head>
<body>
    <h2>Ingresar datos</h2>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="name" required><br><br>
        <label>Correo:</label>
        <input type="email" name="email" required><br><br>
        <button type="submit">Enviar</button>
    </form>
    
    <h2>Datos enviados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["email"] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
