<?php

include "connection.php";
error_reporting(0);

$id = $_REQUEST['id'];

$sql = "DELETE FROM donate_save WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../admin.php");
} else {
  echo "Error deleting record: " . $conn->error;
}


?>
