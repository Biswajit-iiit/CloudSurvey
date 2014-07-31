<?php
include 'conn.php';
$sql="SELECT * FROM survey where combo='bondi'";
$result=mysql_query($sql);
$combo_bondi=mysql_num_rows($result);
















?>