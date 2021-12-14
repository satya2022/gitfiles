<?php
echo "this is data function in php";
echo "<br>";
$d=date("Y-m-d");
echo "<br>";
echo " dste is $d";
echo "<br>";
echo date('Y-m-d\TH:i:sO');
echo "<br>";
echo date(DateTime::ISO8601);


?>