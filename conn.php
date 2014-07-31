<?php
$con=mysql_connect("127.0.0.1","root","");
if(!$con)
	die(mysql_errno());

mysql_select_db("survey");
?>