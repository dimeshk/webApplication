<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poochlife";


$conn = new mysqli($servername, $username, $password, $dbname);

 $firstname=$_REQUEST["firstname"];
 $lastname=$_REQUEST["lastname"];
 $email=$_REQUEST["email"];
 $messages=$_REQUEST["messages"];





if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO rescue( firstname,lastname,email,messages) VALUES ('$firstname','$lastname','$email','$messages')";

if ($conn->query($sql) === TRUE)
 {

echo '<script language="javascript">';
echo 'alert("Welcome Aboard !")';
echo '</script>';
}
 else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close() ;
?>


