<?php
include 'conn.php';
$sql="SELECT * FROM survey where age=50";
$result=mysql_query($sql);
$age_50=mysql_num_rows($result);
















?>