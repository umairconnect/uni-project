<?php

include "connection.php";
error_reporting(0);


$id = $_REQUEST['id'];

$itemname = $_REQUEST['name'];
$location =  $_REQUEST['location'];
$phone = $_REQUEST['phone'];
$type = $_REQUEST['type'];

$sql = "UPDATE donate_save SET name='$itemname', location='$location', phone='$phone', type='$type' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  header("Location: ../admin.php");
} else {
  echo "Error updating record: " . $conn->error;
}
?>
