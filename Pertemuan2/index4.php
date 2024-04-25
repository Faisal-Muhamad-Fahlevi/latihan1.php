<?php 
// Array
// Cara lama bikin array di php 
$arr = array(1, 3, 4, 7, 9, 11, 30);
print_r($arr);

print "<br>";
// cara baru bikin array di php
$arr2 = ["Maulana", "Chandra", "Yudha", "Naufal"];

print_r($arr2);
print "<br>";
var_dump($arr2);
print "<br>";
echo $arr2[3];

// mengedit isi Array
$arr2[3] = "Jabbar";

// menambah isi array
$arr2[4] = "Naufal";
print "<br>";

// menambah isi array
$arr2[] = "Saeful";
print_r($arr2);

// foreach
foreach ($arr2 as $a) {
    echo $a , "<br>";
}

?>