<?php
include 'conn.php';
$sql="SELECT * FROM survey where pay=8000";
$result=mysql_query($sql);
$pay_8000_10000=mysql_num_rows($result);
2500











?>