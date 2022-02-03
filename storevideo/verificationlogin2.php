<!DOCTYPE html>
<html>
	<head>
		<title>Students Table</title>
		<meta name="Author" content="Hassan_Rami" />
		<script type="text/javascript">
			
			
		</script>
	</head>
	<!--if
	this is commment
	-->
	<body>


<center>


<?php

require_once('./connection.php');
 $db_server 		= 'localhost';
    $db_user		    = 'root';
    $db_passwd		= '';
   $db_database	    = 'projectweb';

    $db_con           = mysqli_connect($db_server, $db_user, $db_passwd, $db_database);

    if (mysqli_connect_errno()) {
        die('There was an error connecting ' . mysqli_connect_error());
	}

$id       = $_GET ['id'];
$password          = $_GET ['password'];

$query = "SELECT id FROM students WHERE password = '". md5($password) ."'";

$result = mysqli_query($db_con, $query);

$r = mysqli_num_rows($result);

if ($r != 1) {
	echo "NOT SCUSSESUFUL TRY AGAIN";
}else{
	
	echo "<br/><br/><br/><h1> Hallo Succesufful <br/><br/> You are the admin click below</h1>";
	$queryy = "SELECT * FROM students where id ='$id'";
    $resulte = mysqli_query($db_con, $queryy);
	
	
	
	
    if(!$resulte) { // if null or zero there is an issue
	die('There was an error quering ' . mysqli_error());
}

echo '<table border="1">' . "\r\n";
?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


<div class = "col-sm-4">
<form name ="Student" method = "GET"   action="indexx.php">

<input type="submit" style="width: 400px; font-size : 40px; height: 80px; text-align:center; color:red;" value = "Upload A Video" />


<?php



}
echo '</table>';
?>
</div>

</form>
</center>
	</body>
</html>