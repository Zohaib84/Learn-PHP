<?php
// Array Sort Functions

// Array sort and Rsort Function
/*$a = ['Orange', 'Banana', 'Millon', 'Mango', 'Gawawa'];
//sort($a); // sort(); Sort  index array in Assending order
rsort($a); // rsort(); sort index array in decending orrder
echo "<pre>";
print_r($a);
echo "</pre>";*/

// Asort and Arsort Assocative array sorting
/*$a = ['1' => 'Orange', '2' => 'Banana', 3 => 'Gawawa', '4' => 'Mango'];
//asort($a); // Asort() Sort assosiated array in assending order.
arsort($a); // Asort() Sort assosiated array in assending order.*/

// KSort and Krsort Key sort Assocaitive Array
//ksort($a); // Assending Sort value through Key
//krsort($a); // decending Sort value through Key
//$a = ['d' => 'Orange', 'c' => 'Banana', 'a' => 'Gawawa', 'b' => 'Mango'];

// Natsort and Natcasesort (natural order sorting, Natral order case sensitive sort)
/*$color= ['Red12.png', 'Red34.png', 'red11.png', 'red43.png'];
natcasesort($color);// nartual order case sesntive
//natsort($color); // natural order Natsort()
echo "<pre>";
print_r($color);
echo "</pre>";*/

// Array multisort
/*$a = ['Banana', 'Mango', 'Apple'];
$b = ['Carrot', 'Lemon', 'Onion'];
array_multisort($a, $b); // Array value must be same
echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r($b);
echo "</pre>";*/

// Array reverse

$a = ['Banana', 'Mango', 'Apple'];
$new = array_reverse($a);
echo "<pre>";
print_r($a);
echo "</pre>";
 ?>
