<?php
include 'conn.php';
$sql="SELECT * FROM survey where color='white'";
$result=mysql_query($sql);
$color_white=mysql_num_rows($result);
















?>