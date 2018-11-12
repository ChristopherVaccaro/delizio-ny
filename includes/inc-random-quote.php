<?php
$input = array(
"&quot;The pizza here is easily the best I've ever had. Friendly staff, clean and just delicious. Also recommend the chocolate gelato.&quot;<br>- Andrew H.<img src='images/star_icon.png' width='102' height='16' alt='star icons' style='margin-left:20px;'/>", 

"&quot;This pizza is amazing! The sauce is great and they also have specialty pizzas like a penne vodka slice which is to die for. Friendly staff. Deliziosa is defintely delicious!”<br />— Amanda R.<img src='images/star_icon.png' width='102' height='16' alt='star icons' style='margin-left:20px;'/>",
 
"&quot;The food at this establishment is fantastic. The employees and friendly as well. Has to be the best pizza I have ever tasted.”<br />— Matt H.<img src='images/star_icon.png' width='102' height='16' alt='star icons' style='margin-left:20px;'/>",
 
"&quot;Best pizza in the area!  Family-run pizza place with table-service area. Everything (pizzas, pastas, stromboli) is deliziosa!”<br />— Bill B.<img src='images/star_icon.png' width='102' height='16' alt='star icons' style='margin-left:20px;'/>", 

"&quot;The best pizza in rockland county hands down!!!!&quot;<br>- Kasheema B.<img src='images/star_icon.png' width='102' height='16' alt='star icons' style='margin-left:20px;'/>",

"&quot;Every time I've eaten here, the pizza has been outstanding...as well as the kind service received.&quot;<br>- Allie M.<img src='images/star_icon.png' width='102' height='16' alt='star icons' style='margin-left:20px;'/>",

"&quot;Love the Chicken Ceasar Salad Pizza! There's something about the dough for any of them. You can definitely tell it's fresh!!&quot;<br>- Christine T.<img src='images/star_icon.png' width='102' height='16' alt='star icons' style='margin-left:20px;'/>"
);

echo $input[array_rand($input,1)];
?>