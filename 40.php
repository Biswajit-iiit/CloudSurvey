<?php
include 'conn.php';
$sql="SELECT * FROM survey where age=40";
$result=mysql_query($sql);
$age_40=mysql_num_rows($result);
















?>