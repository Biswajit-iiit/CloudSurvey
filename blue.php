<?php
include 'conn.php';
$sql="SELECT * FROM survey where color='blue'";
$result=mysql_query($sql);
$color_blue=mysql_num_rows($result);
















?>