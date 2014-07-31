<?php
include 'conn.php';
$sql="SELECT * FROM survey where choice='jeans'";
$result=mysql_query($sql);
$choice_jeans=mysql_num_rows($result);















?>