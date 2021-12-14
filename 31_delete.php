<?php

// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "balajee1";
// creating a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);
// check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connected successfully";
}

$sql="DELETE FROM `bala` WHERE `bala`.`sno` = 3";
$result=mysqli_query($conn, $sql);
$aff=mysqli_affected_rows($conn);
echo"<br>number of affected rows:$aff<br>";
if(!$result){
    $err=mysqli_error($conn);
echo"not delated   successfully due to this error---> $err";

}
else {
    echo"delated successfully";
}






?>