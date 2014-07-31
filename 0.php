<?php
include 'conn.php';
$sql="SELECT * FROM survey where pay=0";
$result=mysql_query($sql);
$pay_0_1000=mysql_num_rows($result);
















?>