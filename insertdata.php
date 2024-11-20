<?php
// Database credentials
$servername = "localhost"; 
$username = "root";       
$password = "";            
$dbname = "DIPLALphp02";   

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: ");
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Fetch data from the form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['add'];

    // Validate and sanitize data (optional but recommended)
    $name = htmlspecialchars(strip_tags($name));
    $email = htmlspecialchars(strip_tags($email));
    $address= (int)$address;
    &id = (int)$id;

    // Prepare SQL query using prepared statements
    $stmt = $conn->prepare("INSERT INTO form2(id,name, email, address) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi",$id, $name, $email, $address); // "ssi" -> string, string, integer


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
