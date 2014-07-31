<?php
include 'conn.php';
$sql="SELECT * FROM survey where qualification='undergraduate'";
$result=mysql_query($sql);
$qualification_ug=mysql_num_rows($result);
















?>