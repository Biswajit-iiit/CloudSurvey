<?php
include 'conn.php';
$sql="SELECT * FROM survey where combo='bag'";
$result=mysql_query($sql);
$combo_bag=mysql_num_rows($result);















?>