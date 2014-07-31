<?php
include 'conn.php';
$sql="SELECT * FROM survey where age=10";
$result=mysql_query($sql);
$age_10=mysql_num_rows($result);
















?>