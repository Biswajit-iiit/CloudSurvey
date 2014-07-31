<?php
include 'conn.php';
$sql="SELECT * FROM survey where choice='tops'";
$result=mysql_query($sql);
$choice_tops=mysql_num_rows($result);
















?>