<?php
include 'conn.php';
$sql="SELECT * FROM survey where gender='male'";
$result=mysql_query($sql);
$gender_male=mysql_num_rows($result);
















?>