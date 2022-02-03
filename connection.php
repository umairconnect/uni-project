<?php

$db_server 		= 'localhost';
$db_user		= 'root';
$db_passwd		= '';
$db_database	= 'projectweb';

//mysqli_connect($db_server, $db_user, $db_passwd);
//mysqli_select_db($db_database);

$db_con = mysqli_connect($db_server, $db_user, $db_passwd, $db_database);

if (mysqli_connect_errno()) { //return 0 is successful
    die('There was an error connecting ' . mysqli_connect_error());
}

?>