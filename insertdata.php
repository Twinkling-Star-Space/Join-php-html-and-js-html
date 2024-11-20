<?php
// Database credentials
$servername = "localhost"; // or your host
$username = "root";        // your database username
$password = "";            // your database password
$dbname = "DIPLALphp";   // your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Fetch data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gm'];

    // Validate and sanitize data (optional but recommended)
    $name = htmlspecialchars(strip_tags($name));
    $email = htmlspecialchars(strip_tags($email));
    $gender = (int)$gm;

    // Prepare SQL query using prepared statements
    $stmt = $conn->prepare("INSERT INTO form1 (name, email, gender) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name, $email, $gender); // "ssi" -> string, string, integer


    // Execute the query
    if ($stmt->execute()) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>
