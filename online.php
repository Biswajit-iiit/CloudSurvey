<?php
include 'conn.php';
$sql="SELECT * FROM survey where pref='online'";
$result=mysql_query($sql);
$pref_online=mysql_num_rows($result);















?>