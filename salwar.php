<?php
include 'conn.php';
$sql="SELECT * FROM survey where choice='salwar'";
$result=mysql_query($sql);
$choice_salwar=mysql_num_rows($result);















?>