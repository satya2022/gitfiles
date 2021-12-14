<?php
echo"welcome to forerach loop";
echo "<br/>";
$arr=array("apple","banana","painapple","grapees");
// for ($i=0; $i <count($arr);  $i++) { 
//    echo $arr[$i];
//    echo "<br/>"; 
// }

// BETTER WHEY TO DO THIS
foreach ($arr as  $value) {
  echo "$value ";
  echo  "<br/>";
}
?>