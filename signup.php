<?php
include 'db.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(fullname,email,password)
VALUES('$fullname','$email','$password')";

if(mysqli_query($conn,$sql)) {
    echo "Registration Successful";
} else {
    echo "Error";
}
?>