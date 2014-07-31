<?php
include 'conn.php';
$sql="SELECT * FROM survey where age=20";
$result=mysql_query($sql);
$age_20=mysql_num_rows($result);
















?>