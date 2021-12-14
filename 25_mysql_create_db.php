<?php

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
echo"connection was successful <br>";
}
//Create a Database
$sql = "CREATE DATABASE dbSatya4";
$result=mysqli_query($conn, $sql);
// check for the database success
if ($result) {
  echo "Database was created successfully <br>";
}
else {
  echo "Database was not created successfully because of this problem ---> <br>".mysqli_error($conn);
}
echo "the result is";
echo var_dump($result); 
echo "<br>";


?>