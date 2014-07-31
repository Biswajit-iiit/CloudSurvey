<?php
include 'conn.php';
$sql="SELECT * FROM survey where qualification='postgraduate'";
$result=mysql_query($sql);
$qualification_pg=mysql_num_rows($result);
















?>