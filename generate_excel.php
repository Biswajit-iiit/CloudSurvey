<?php



include 'conn.php';

include '10.php';
include '20.php';
include '30.php';
include '40.php';
include '50.php';


include 'male.php';
include 'female.php';


include 'ug.php';
include 'g.php';
include 'pg.php';


include 'potion.php';
include 'kurti.php';
include 'jeans.php';
include 'salwar.php';
include 'skirts.php';
include 'tops.php';






include 'red.php';
include 'green.php';
include 'blue.php';
include 'black.php';
include 'pink.php';
include 'white.php';



include '0.php';
include '1000.php';
include '2500.php';
include '5000.php';
include '8000.php';



include 'shop.php';
include 'online.php';
include 'both.php';



include 'shoe.php';
include 'bangles.php';
include 'bag.php';
include 'crutch.php';
include 'bondi.php';
include 'jewellary.php';






$filename = "C:\Users\Administrator\Desktop\data.csv";
 
// Actually create the file
// The w+ parameter will wipe out and overwrite any existing file with the same name
$handle = fopen($filename, 'w+');
 
// Write the spreadsheet column titles / labels
fputcsv($handle, array('Question','Option1','Option2','Option3','Option4','Option5','Option6'));
 
// Write all the user records to the spreadsheet

fputcsv($handle, array("Whats your age","10-20","20-30","30-40","40-50","50-60",""));
fputcsv($handle,array("",$age_10,$age_20,$age_30,$age_40,$age_50,));
fputcsv($handle,array("","","","","","",));
fputcsv($handle,array("","","","","","",));
 

fputcsv($handle, array("Gender","Male","Female"));
fputcsv($handle, array("",$gender_male,$gender_female));
fputcsv($handle,array("","",""));
fputcsv($handle,array("","",""));


fputcsv($handle, array("Qualification","UnderGraduate","Graduate","PostGraduate"));
fputcsv($handle, array("",$qualification_ug,$qualification_g,$qualification_pg));
fputcsv($handle,array("","","",""));
fputcsv($handle,array("","","",""));


fputcsv($handle, array("What you like to wear for party","Potion","Jeans","Kurti","Salwar","Tops","Skirts"));
fputcsv($handle, array("",$choice_potion,$choice_jeans,$choice_kurti,$choice_salwar,$choice_tops,$choice_skirts));
fputcsv($handle,array("","","","","","",""));
fputcsv($handle,array("","","","","","",""));



fputcsv($handle, array("What colour you prefer in those","Red","Green","Blue","Black","Pink","White"));
fputcsv($handle, array("",$color_red,$color_green,$color_blue,$color_black,$color_pink,$color_white));
fputcsv($handle,array("","","","","","",""));
fputcsv($handle,array("","","","","","",""));



fputcsv($handle, array("If you like a kutri , top how much you on an average pay for it","0-1000","1000-2500","2500-5000","5000-8000","8000-10000"));
fputcsv($handle, array("",$pay_0_1000,$pay_1000_2500,$pay_2500_5000,$pay_5000_8000,$pay_8000_10000,));
fputcsv($handle,array("","","","","","",));
fputcsv($handle,array("","","","","","",));



fputcsv($handle, array("You prefer shop or online or both","Shop","Online","Both"));
fputcsv($handle, array("",$pref_shop,$pref_online,$pref_both));
fputcsv($handle,array("","","",""));
fputcsv($handle,array("","","",""));



fputcsv($handle, array("If you get chance to buy combo deal ,what you buy along with dresses?","Jewellary","Shoe","Bag","Crutch","Bondi","Bangles"));
fputcsv($handle, array("",$combo_jewellery,$combo_shoe,$combo_bag,$combo_crutch,$combo_bondi,$combo_bangles,));
fputcsv($handle,array("","","","","","",""));
fputcsv($handle,array("","","","","","",""));







 
// Finish writing the file
fclose($handle);
?>