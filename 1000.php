<?php
include 'conn.php';
$sql="SELECT * FROM survey where pay=1000";
$result=mysql_query($sql);
$pay_1000_2500=mysql_num_rows($result);
















?>