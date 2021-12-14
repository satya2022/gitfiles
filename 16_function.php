<?php

echo "this is function in php";
echo "<br>";
// FIRST FUNCTION FOR ALL MARKS
function processMarks($marksArr) {
    $sum=0;
    foreach ($marksArr as  $value) {
       $sum+=$value;
    
    }
    return $sum;

}
// DEFNING SECOND FUNCTION FOR AVRAGE MARKS
function avgMarks($marksArr) {
    $sum=0;
    $i=1;
    foreach ($marksArr as  $value) {
       $sum+=$value;
    $i++;
    }
    return $sum/$i;

}

$satyraut=[34,45,67,78,89,57];
// $sumMarks=processMarks($satyraut);
$sumMarks=avgMarks($satyraut);
// /balajee makes
$bala=[99,92,93,94,17,97];
// $sumMarksbala=processMarks($bala);
$sumMarksbala=avgMarks($bala);

echo "totel makes scored by satyaraut out of 600, $sumMarks <br>";
echo "totel makes scored by bala out of 600, $sumMarksbala<br>";

// SECOND COFDE 2
/*function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  echo addNumbers(5, "5 days"); */
  // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

//   CODE NO 3
// function setHeight(int $minheight = 50) {
//     echo "The height is : $minheight <br>";
//   }
  
//   setHeight(350);
//   setHeight();
//   setHeight(135);
//   setHeight(80);

// CODE NO 4
// function sum(int $x, int $y) {
//     $z = $x + $y;
//     return $z;
//   }
  
//   echo "5 + 10 = " . sum(5,10) . "<br>";
//   echo "7 + 13 = " . sum(7,13) . "<br>";
//   echo "2 + 4 = " . sum(2,4);

// CODE NO 5
// function addNumbers(float $a, float $b) : float {
//     return $a + $b;
//   }
//   echo addNumbers(1.2, 5.2); 

// CODE NO 6
// function addNumbers(float $a, float $b) : int {
//     return (int)($a + $b);
//   }
//   echo addNumbers(1.2, 5.2); 

// CODE NO 7
// function add_five(&$value) {
//     $value += 5;
//   }
  
//   $num = 2;
//   add_five($num);
//   echo $num;

// CODE NO 8
// function add_five(&$value) {
//     $value += 5;
//   }
  
//   $num = 2;
//   add_five($num);
//   echo $num;


?>
