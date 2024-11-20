<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$x=$_POST["name"];
$y=$_POST["address"];
$z=$_POST["email"];
$w=$_POST["gm"];

}

$servername ="localhost";
$username="root";
$password ="";
$dbname ="DIPLAL-DB";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error)
{
    die ("connection failed " .$conn->error);
}
echo "connected to server successfully";


$query1 = "CREATE DATABASE DIPLAL-DB";
$conn->query($query1);  
if(!$query1)
{
    echo " Database Not connected";
}
echo " Databaseconnected successfully";

mysqli_select_db($conn, "DIPLAL-DB");

$query2 = "create table form 
(Name VARCHAR(255) NOT NULL,
 Email VARCHAR(255) NOT NULL,
 Address VARCHAR(255) NOT NULL,
 Gender VARCHAR(255) NOT NULL)";

$conn->query($query2);
if(mysqli_query($conn, $query2))
{
    echo "table created successfully";
}
else{
    echo "Error creating table: ". mysqli_error($conn);
}

$query3 = "INSERT INTO form (Name, Email, Address, Gender)
 VALUES ('$x', '$z', '$y', '$w')";

$conn->close();

?>
