<?php 
include '_dbconnect.php' ;
// require '_dbconnect1.php' ;
echo"this";

 
 $sql="SELECT * FROM `phptrip`";
$result=mysqli_query($conn, $sql);

// find the number of results
$num=mysqli_num_rows($result);
echo "Number of results: ".$num."<br>";
echo "<br>";
while ($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['sno'].   "hellow".$row['name'].     "welcome to".$row['dest'];
    echo "<br>";
    
    }
    
?>