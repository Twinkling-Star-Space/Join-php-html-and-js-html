<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $x = $_POST["name"];
    $y = $_POST["address"];
    $z = $_POST["email"];
    $w = $_POST["gm"];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DIPLALphp";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to server successfully";

$query1 = "CREATE DATABASE DIPLALphp";
$conn->query($query1);
if (!$query1) {
    echo "Database not connected"; 
}
echo "Database connected successfully";

mysqli_select_db($conn, "DIPLALphp");

$query2 = "CREATE TABLE form1 (
    Name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Address VARCHAR(255) NOT NULL,
    Gender VARCHAR(255) NOT NULL
)";

$conn->query($query2);
if (mysqli_query($conn, $query2)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
$conn->close();
?>
