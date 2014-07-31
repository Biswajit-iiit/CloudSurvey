<?php
include 'conn.php';
$sql="SELECT * FROM survey where choice='potion'";
$result=mysql_query($sql);
$choice_potion=mysql_num_rows($result);















?>