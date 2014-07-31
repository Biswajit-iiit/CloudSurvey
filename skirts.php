<?php
include 'conn.php';
$sql="SELECT * FROM survey where choice='skirts'";
$result=mysql_query($sql);
$choice_skirts=mysql_num_rows($result);
















?>