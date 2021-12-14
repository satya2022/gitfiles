<?php
/*whey to conect my sql database
1.MYSQLI extension
2.pdo
*/


// connecting to the database 
$servername="localhost";
$username="root";
$password="";
$database="dbsatya";

//create a conaction 
$conn=mysqli_connect($servername,$username,$password,$database);
// Dia if connectionwas not successful
if (!$conn) {
  die("sorry we filed to connect'".mysqli_connect_error());
}
else {
echo"connection was successful <br>";
}
//Create a table in database
$sql="CREATE TABLE `phptrip` ( `sno` INT(6) NOT NULL ,  `name` VARCHAR(12) NOT NULL ,  `dest` VARCHAR(6) NOT NULL )";
$result = mysqli_query($conn, $sql);

// check for the database success
if ($result) {
  echo "Database table was created successfully <br>";
}
else {
  echo "Database table  was not created successfully because of this problem ---> <br>".mysqli_error($conn);
}
echo "the result is";
echo var_dump($result); 
echo "<br>";




?>