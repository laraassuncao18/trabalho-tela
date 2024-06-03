<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO cadUser (name, email, password, tipoUser) VALUES ('$name', '$email', '$password', 0)";

    if ($conn->query($sql) === TRUE) {
        // Redirecionar para a página de login
        header("Location: login.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>