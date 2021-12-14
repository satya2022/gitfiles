<?php
// Connecting to the Database
$servername = "localhost";  
$username = "root";
$password = "";
$database = "dbsatya";
// creating connection to the database
$conn = mysqli_connect($servername, $username, $password, $database);
// checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connected successfully";
}

$sql="SELECT * FROM `phptrip` WHERE `dest`='bihar'";
$result=mysqli_query($conn, $sql);

// uses of  WHERE claus to fetch data form the database
$num=mysqli_num_rows($result);
echo "Number of results: ".$num."<br>";
echo "<br>";
// display the row returned by the sql quary
$no=1;
if ($num>0) {
  
    while ($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $no.   " .hellow".$row['name'].     " .welcome to".$row['dest'];
     $no = $no +1;
    echo "<br>";
    
    }
}
// using of WHERE clause to update data
$sql="UPDATE `phptrip` SET `name` = 'frombihar' WHERE `dest`='bihar'";
$result=mysqli_query($conn, $sql);
echo var_export($result) ;
$aff = mysqli_affected_rows($conn);
echo"no of affected rows updated:$aff";
if($result){
echo"we updateed the recod data successfuly";
}
else"we could notupdateed the recod data successfuly";


?>