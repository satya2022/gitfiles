<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsatya";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql="SELECT * FROM `phptrip`";
$result=mysqli_query($conn, $sql);

// find the number of results
$num=mysqli_num_rows($result);
echo "Number of results: ".$num."<br>";
echo "<br>";

// display the row returned by the sql quary
if ($num>0) {
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";


// we can fatch a batter why using while loop
while ($row = mysqli_fetch_assoc($result)){
// echo var_dump($row);
echo $row['sno'].   "hellow".$row['name'].     "welcome to".$row['dest'];
echo "<br>";

}



}





?>