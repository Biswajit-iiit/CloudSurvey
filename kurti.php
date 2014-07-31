<?php
include 'conn.php';
$sql="SELECT * FROM survey where choice='kurti'";
$result=mysql_query($sql);
$choice_kurti=mysql_num_rows($result);















?>