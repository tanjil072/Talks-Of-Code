<?php

// create a variable
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

//Execute the query
$conn = new mysqli('localhost','root','','signup');


$sql = "INSERT INTO contact (Name,Email,Message)
VALUES ('$name','$email','$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
                