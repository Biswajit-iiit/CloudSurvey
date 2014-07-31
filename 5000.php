<?php
include 'conn.php';
$sql="SELECT * FROM survey where pay=5000";
$result=mysql_query($sql);
$pay_5000_8000=mysql_num_rows($result);
2500











?>