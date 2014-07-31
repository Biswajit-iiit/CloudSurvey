<?php
include 'conn.php';
$sql="SELECT * FROM survey where combo='shoe'";
$result=mysql_query($sql);
$combo_shoe=mysql_num_rows($result);















?>