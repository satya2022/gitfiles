<?php
// echo "this is tutorial 7";
$name="satya";
$income=200;
/* php data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

//  String-sequence of characters 
$name='satya';
$frind="harsh";
echo "$name ka frind is $frind";

// Integer - Non decimal number
$income=445;
$debts=-655;
echo "$income";
echo "<br>";
echo "$debts";
echo "<br>";

// Float - Decimal point number
$income=345.34;
$debts=-45.44;
echo "$income";
echo "<br>";
echo "$debts";
echo "<br>";

// Boolean - Can be either true or false
$x=true;
$is_frind=false;
echo var_dump ($x);
echo "<br>";
echo var_dump ($is_frind);
echo "<br>";



// Object - Instances of classes
// Employee is a class ---> harry can be one object

// Array - Used to store multiple values in a single variable
$friends=array("rohan", "subham", "harsh","aditya","ansh");
echo var_dump($friends); 
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";

// NULL
$name=null;
echo var_dump($name); 

?>