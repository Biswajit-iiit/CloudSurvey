<?php
include 'conn.php';
$sql="SELECT * FROM survey where color='black'";
$result=mysql_query($sql);
$color_black=mysql_num_rows($result);
















?>