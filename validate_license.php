<?php
$conn = new mysqli("localhost", "root", "", "software_store");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $key = $_POST['license_key'];
    $sql = "SELECT * FROM licenses WHERE key_value='$key'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "License Key Valid!";
    } else {
        echo "Invalid License Key!";
    }
}
?>
