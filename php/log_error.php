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

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['Error']) && isset($data['Message']) && isset($data['Cause']) && isset($data['Origin'])){
$error=$data['Error'];
$message=$data['Message'];
$cause=$data['Cause'];
$origin=$data['Origin'];

$sql = "INSERT INTO `logs` (`time`, `error`, `message`, `cause`, `origin`) VALUES (current_timestamp(), '$error', '$message', '$cause', '$origin')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}else{
    $data = json_decode(file_get_contents('php://input'));
    print_r($data);
    echo "Error: Supplied arguments are incomplete/invalid";
}

$conn->close();
?>