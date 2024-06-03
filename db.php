<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name"; // Substitua pelo nome do seu banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
