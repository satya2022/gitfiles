<?php
echo"welcome to multi dimensional array";
echo "<br>";
// CODE NO 1
// creating a 2 dimensional array 
$multidim=array(
                             array(2,5,7,8),
                             array(1,2,3,1),
                             array(4,5,0,1)
);

// echo var_dump($multidim);
// echo $multidim[0][0];
// echo "<br>";
// echo $multidim[1][2];
// echo "<br>";
// printing the contents of the two dimensional array
/*
for ($i=0; $i < cont($multidim); $i++) { 
    echo  vardump($multidim[$i]);
echo "<br>";
}
*/

for ($i=0; $i < count($multidim); $i++) { 
    for ($j=0; $j < count($multidim[$i]); $j++) { 
        echo $multidim[$i][$j];
        echo " ";
    }
    echo "<br>";
}


?>