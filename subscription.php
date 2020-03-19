<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poochlife";


$conn = new mysqli($servername, $username, $password, $dbname);

 $email=$_REQUEST["email"];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO subscription(email) VALUES ('$email')";

if ($conn->query($sql) === TRUE)
 {
echo '<script language="javascript">';
echo 'alert("Thank you for Subscribing to our website")';
echo '</script>';
}
 else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close() ;
?>


