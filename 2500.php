<?php
include 'conn.php';
$sql="SELECT * FROM survey where pay=2500";
$result=mysql_query($sql);
$pay_2500_5000=mysql_num_rows($result);










?>