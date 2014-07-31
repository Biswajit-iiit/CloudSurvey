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
include 'jewellery.php';




echo "<table border='1'>
	<tr>
	<th>Question</th>
	<th>Option1</th>
	<th>Option2</th>
	<th>Option3</th>
	<th>Option4</th>
	<th>Option5</th>
	<th>Option6</th>
	</tr>

<tr></tr>
<tr></tr>



<tr>
<td>Whats your age</td>
<td>10-20</td>
<td>20-30</td>
<td>30-40</td>
<td>40-50</td>
<td>50-60</td>

</tr>

<tr>
<td></td>
<td>$age_10</td>
<td>$age_20</td>
<td>$age_30</td>
<td>$age_40</td>
<td>$age_50</td>
</tr>
<tr></tr>
<tr></tr>


<tr>
<td>Gender</td>
<td>Male</td>
<td>Female</td>
</tr>

<tr>
<td></td>
<td>$gender_male</td>
<td>$gender_female</td>
</tr>
<tr></tr>
<tr></tr>






<tr>
<td>Qualification</td>
<td>Undergraduate</td>
<td>Graduate</td>
<td>Postgraduate</td>
</tr>

<tr>
<td></td>
<td>$qualification_ug</td>
<td>$qualification_g</td>
<td>$qualification_pg</td>
</tr>
<tr></tr>
<tr></tr>








<tr>
<td>Like to wear for party</td>
<td>Potion</td>
<td>Jeans</td>
<td>kurti</td>
<td>salwar</td>
<td>tops</td>
<td>skirts</td>
</tr>

<tr>
<td></td>
<td>$choice_potion</td>
<td>$choice_jeans</td>
<td>$choice_kurti</td>
<td>$choice_salwar</td>
<td>$choice_tops</td>
<td>$choice_skirts</td>
</tr>
<tr></tr>
<tr></tr>








<tr>
<td>Color u prefer</td>
<td>Red</td>
<td>Green</td>
<td>blue</td>
<td>black</td>
<td>pink</td>
<td>white</td>
</tr>

<tr>
<td></td>
<td>$color_red</td>
<td>$color_green</td>
<td>$color_blue</td>
<td>$color_black</td>
<td>$color_pink</td>
<td>$color_white</td>
</tr>
<tr></tr>
<tr></tr>





<tr>
<td>Spend on kurti</td>
<td>0-1000</td>
<td>1000-2500</td>
<td>2500-5000</td>
<td>5000-8000</td>
<td>8000-10000</td>
</tr>

<tr>
<td></td>
<td>$pay_0_1000</td>
<td>$pay_1000_2500</td>
<td>$pay_2500_5000</td>
<td>$pay_5000_8000</td>
<td>$pay_8000_10000</td>
</tr>
<tr></tr>
<tr></tr>









<tr>
<td>Shop online/shop/both</td>
<td>Shop</td>
<td>Online</td>
<td>Both</td>
</tr>

<tr>
<td></td>
<td>$pref_shop</td>
<td>$pref_online</td>
<td>$pref_both</td>
</tr>
<tr></tr>
<tr></tr>








<tr>
<td>Combo offer</td>
<td>Jewellery</td>
<td>Shoe</td>
<td>Bag</td>
<td>Crutch</td>
<td>Bondi</td>
<td>Bangles</td>
</tr>

<tr>
<td></td>
<td>$combo_jewellery</td>
<td>$combo_shoe</td>
<td>$combo_bag</td>
<td>$combo_crutch</td>
<td>$combo_bondi</td>
<td>$combo_bangles</td>
</tr>
</table>";












?>