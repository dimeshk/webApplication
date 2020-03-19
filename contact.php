<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poochlife";


$conn = new mysqli($servername, $username, $password, $dbname);

 $firstname=$_REQUEST["firstname"];
 $lastname=$_REQUEST["lastname"];
 $email=$_REQUEST["email"];
 $subject=$_REQUEST["subject"];
 $messages=$_REQUEST["messages"];





if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact( firstname,lastname,email,subject,messages) VALUES ('$firstname','$lastname','$email','$subject','$messages')";

if ($conn->query($sql) === TRUE)
 {
echo '<script language="javascript">';
echo 'alert("New record created successfully")';
echo '</script>';
}
 else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close() ;
?>


