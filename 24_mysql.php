<?php

echo"welcome thes stage where we rady to get conect to a  database <br>";
/*whey to conect my sql database
1.MYSQLI extension
2.pdo
*/
// connecting to the database 
$servername="localhost";
$username="root";
$password="";

//create a conaction 
$conn=mysqli_connect($servername,$username,$password);
// Dia if connectionwas not successful
if (!$conn) {
  die("sorry we filed to connect'".mysqli_connect_error());
}
else {
echo"connection was successful";
}


?>