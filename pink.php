<?php
include 'conn.php';
$sql="SELECT * FROM survey where color='pink'";
$result=mysql_query($sql);
$color_pink=mysql_num_rows($result);
















?>