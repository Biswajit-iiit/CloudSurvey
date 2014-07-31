<?php
include 'conn.php';
$sql="SELECT * FROM survey where pref='both'";
$result=mysql_query($sql);
$pref_both=mysql_num_rows($result);
















?>