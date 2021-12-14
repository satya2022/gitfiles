<?php
echo " welcome to associative array";
echo "<br> ";

// CODE NO 1 SIMPLE ARRAY 
// This are called index array

// $satya=array("this","that","what","name");
// echo $satya[0];
// echo "<br> ";
// echo $satya[1];
// echo "<br> ";
// echo $satya[2];
// echo "<br> ";
// echo $satya[3];

// CODE NO 2 ASSOCIATIVE ARRAY
$fevCol=array('subham' => 'pink','harsh'=>'black','satyan'=>'black',8=>'this',);
// echo $fevCol['subham'];
// echo "<br> ";
// echo $fevCol['harsh'];
// echo "<br> ";
// echo $fevCol['satyan'];
// echo "<br> ";
// echo $fevCol[8];
foreach ($fevCol as $key => $value) {
 echo "<br> fevrate coler of  $key is $value";
//  key=name,value=coler
}



?>