<?php
include 'conn.php';
$sql="SELECT * FROM survey where age=30";
$result=mysql_query($sql);
$age_30=mysql_num_rows($result);
















?>