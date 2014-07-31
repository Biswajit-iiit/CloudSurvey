<?php
include 'conn.php';
$sql="SELECT * FROM survey where combo='bangles'";
$result=mysql_query($sql);
$combo_bangles=mysql_num_rows($result);















?>