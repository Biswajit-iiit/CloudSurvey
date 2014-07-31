<?php
include 'conn.php';
$sql="SELECT * FROM survey where gender='female'";
$result=mysql_query($sql);
$gender_female=mysql_num_rows($result);
















?>