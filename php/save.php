<?php
include "connection.php";
error_reporting(0);

$name = $_REQUEST['name'];
$email =  $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];
 
// Attempt insert query execution
$sql = "INSERT INTO donate_save (name, email, phone, message, status) 
VALUES ('$name', '$email', '$phone', '$message', 'Requested')";


if ($conn->query($sql) === TRUE) {
    header("Location: ../donated_items.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>