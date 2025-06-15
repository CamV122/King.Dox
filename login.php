<?php
$conn = new mysqli("localhost", "root", "", "software_store");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$user'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (password_verify($pass, $row['password'])) {
        echo "Login successful!";
    } else {
        echo "Invalid credentials!";
    }
}
?>
