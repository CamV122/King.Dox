<?php
$conn = new mysqli("localhost", "root", "", "software_store");

$sql = "SELECT * FROM user_activity";
$result = $conn->query($sql);

echo "<h2>User Activity</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<p>User: " . $row['username'] . " | Action: " . $row['action'] . " | Time: " . $row['timestamp'] . "</p>";
}
?>
