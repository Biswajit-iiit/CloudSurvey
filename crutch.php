<?php
include 'conn.php';
$sql="SELECT * FROM survey where combo='crutch'";
$result=mysql_query($sql);
$combo_crutch=mysql_num_rows($result);
















?>