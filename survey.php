<?php

$age=$_POST['age'];
$gender=$_POST['gender'];
$qualification=$_POST['qualification'];
$choice=$_POST['choice'];
$color=$_POST['color'];
$pay=$_POST['pay'];
$pref=$_POST['pref'];
$combo=$_POST['combo'];

//echo $age."<br>".$gender."<br>".$qualification."<br>".$choice."<br>".$color."<br>".$pay."<br>".$pref."<br>".$combo;
include 'conn.php';


$sql="INSERT INTO survey VALUES('$age','$gender','$qualification','$choice','$color','$pay','$pref','$combo')";
mysql_query($sql) or die(mysql_error());












?>