<?php
include 'conn.php';
$sql="SELECT * FROM survey where pref='shop'";
$result=mysql_query($sql);
$pref_shop=mysql_num_rows($result);















?>