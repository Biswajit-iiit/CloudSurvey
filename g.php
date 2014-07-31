<?php
include 'conn.php';
$sql="SELECT * FROM survey where qualification='graduate'";
$result=mysql_query($sql);
$qualification_g=mysql_num_rows($result);
















?>