<?php
$servername = "localhost";
$database = "educacion_dual";
$username = "fese";
$password = "Ws.666.AdQe";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>