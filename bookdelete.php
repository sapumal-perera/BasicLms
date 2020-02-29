<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";
$count =0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$ISBN=$_REQUEST['isbn'];
$query = "DELETE FROM Book WHERE isbn=$ISBN"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: bookview.php"); 
?>
