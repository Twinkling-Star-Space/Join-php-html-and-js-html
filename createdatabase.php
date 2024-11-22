<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "NOV2201";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to server successfully";

$query1 = "CREATE DATABASE NOV2201";
$conn->query($query1);
if (!$query1) {
    echo "Database not connected"; 
}
echo "Database connected successfully";

mysqli_select_db($conn, "NOV2201");

$query2 = "CREATE TABLE MIN2 (
    ID BIGINT(5) NOT NULL,
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
