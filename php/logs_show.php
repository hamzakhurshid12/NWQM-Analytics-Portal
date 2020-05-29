<?php
$servername = "localhost";
$username = "u966376217_liveazan";
$password = "qwerty";
$dbname = "u966376217_azan_error_log";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM logs";
$result = $conn->query($sql);

echo "<style>table, th, td {
  border: 1px solid black;
}</style>";

echo "<table><tr><th>Time</th><th>Error</th><th>Message</th><th>Origin</th></tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["time"]. "</td><td>".$row["error"]. "</td><td>". $row["message"]. "</td><td>".$row["origin"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>