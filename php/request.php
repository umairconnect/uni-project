
<?php
include "connection.php";
error_reporting(0);

$itemname = $_REQUEST['name'];
$location =  $_REQUEST['location'];
$phone = $_REQUEST['phone'];
$type = $_REQUEST['type'];
$description = $_REQUEST['description'];

$checkBox = implode(',', $_POST['techno']);

$filename = $_FILES["file"]["name"];
$tempname = $_FILES["file"]["tmp_name"];    
    $folder = "image/".$filename;

$image = $_FILES['file']['name'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){
   // Upload file
   if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
      // Insert record
   

      // Attempt insert query execution
        $sql = "INSERT INTO donate_save (name, location, phone, type, checkboxes, description, image) 
        VALUES ('$itemname', '$location', '$phone', '$type', '" . $checkBox . "', '$description', '$image')";
   }

}







if ($conn->query($sql) === TRUE) {
    header("Location: ../All_items.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>