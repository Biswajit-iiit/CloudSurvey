<?php
include 'conn.php';
$sql="SELECT * FROM survey where color='red'";
$result=mysql_query($sql);
$color_red=mysql_num_rows($result);
















?>