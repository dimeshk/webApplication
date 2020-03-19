<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poochlife";


$conn = new mysqli($servername, $username, $password, $dbname);

 $fullname=$_REQUEST["fullname"];
 $email=$_REQUEST["email"];




if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO donations( fullname,email) VALUES ('$fullname','$email')";

if ($conn->query($sql) === TRUE)
 {

echo '<script language="javascript">';
echo 'alert("We have received your deatils. We will keep in touch")';
echo '</script>';
}
 else 
{
    
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close() ;
?>


