<?php
include 'conn.php';
$sql="SELECT * FROM survey where color='green'";
$result=mysql_query($sql);
$color_green=mysql_num_rows($result);
















?>