<?php

// operator in php

// 1.Arithmetic operators
// 2.Assignment operators
// 3.Comparison operators
//4. Logical operators


// 1.Arithmetic operators
$a=45;
$b=8;
echo "for a+b,result is".($a+$b)."<br>";
echo "for a-b,result is".($a-$b)."<br>";
echo "for a*b,result is".($a*$b)."<br>";
echo "for a/b,result is".($a/$b)."<br>";
echo "for a%b,result is".($a%$b)."<br>";
echo "for a**b,result is".($a**$b)."<br>";

// 2.Assignment operators
// $x=$a;
// echo "for x value is".$x."<br>";
// $a+=6;
// echo "for a value is".$a."<br>";
// $a-=6;
// echo "for a value is".$a."<br>";
// $a*=6;
// echo "for a value is".$a."<br>";
// $a/=6;
// echo "for a value is".$a."<br>";
// $a%=6;
// echo "for a value is".$a."<br>";

// 3.Comparison operators
$x=7;
$y=9;
// echo "for x==y value is";
// echo var_dump($x==$y)."<br>";

// echo "for x>y value is";
echo var_dump($x>$y)."<br>";
// echo "for x<y value is";
echo var_dump($x<$y)."<br>";

// echo "for x<>y value is";
echo var_dump($x<>$y)."<br>";

// echo "for x>=y value is";
echo var_dump($x>=$y)."<br>";

// echo "for x<=y value is";
echo var_dump($x<=$y)."<br>";

//4. Logical operators
$m=true;
$n=false;
echo "for m and n ,the result is ";
echo var_dump($m and $n)."<br>";

echo "For m && n, the result is "; 
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is "; 
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is "; 
echo var_dump($m || $n);
echo "<br>";

echo "For !m , the result is "; 
echo var_dump(!$m);
echo "<br>";




?>