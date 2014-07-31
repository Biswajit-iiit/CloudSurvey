<?php
include 'conn.php';
$sql="SELECT * FROM survey where combo='jewellary'";
$result=mysql_query($sql);
$combo_jewellery=mysql_num_rows($result);
















?>