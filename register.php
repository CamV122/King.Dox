<?php
$conn = new mysqli("localhost", "root", "", "software_store");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
    $conn->query($sql);
    echo "Registration successful!";
}
?>
