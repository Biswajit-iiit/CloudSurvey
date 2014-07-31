<?php

include 'conn.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM login_details WHERE username='$username' AND password='$password'";
$response=mysql_query($sql) or die(mysql_error());
if(mysql_num_rows($response)==1)
	include 'admin.html';
else 
	echo "Wrong username or password";

?>






























?>