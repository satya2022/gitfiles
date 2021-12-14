<?php
echo"welcome to scope,local,global";
echo"<br/>";

/*$a=98; //global variable
function printValue() {
$a=97; //local variable
echo "the value of a is $a";
}
echo $a;
printValue();
*/
// CODE NO 2
/*$a=98; //global variable
$b=9;
function printValue() {
// $a=97; //local variable
global $a,$b;  //give me access to this global variable
echo "<br>the value of a is $a and b is $b";
$a=100;
$b=1000;

}
echo $a;
printValue();
echo "<br>the value of a is $a and b is $b";
*/

// CODE NO 3

$a=98; //global variable
$b=9;
function printValue() {
// $a=97; //local variable
global $a,$b;  //give me access to this global variable
$a=100;
$b=1000;
echo "<br>the value of a is $a and b is $b";


}
echo $a;
printValue();
echo "<br>the value of a is $a and b is $b";
echo "<br>";
// echo var_dump($GLOBALS);
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);



?>