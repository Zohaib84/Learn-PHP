<?php
// Array map fucntion
/*function square($n,)
{
//  return  "$n for $m"; return associative array
return  strtoupper($n); // Upper case
}
//$a = [1, 4, 6, 3, 8];
$b = ['a' => 'Lemon', "b" => 'Milk', 'c' => 'Salt', 'd' => 'Water', 'e' => 'Suger'];
// $new = array_map(null, $a , $b); // it will return multidimention array
$new = array_map('square', $b);
 echo "<pre>";
 print_r($new);
 echo "</pre>";*/

 // Array Reduce function

function fun($n, $m) //  $n store the optional value at start of operation
{
$n *= $m;
return $n;

//return $n . " = " . $m; // Concatination
}

$a = [1, 2, 4, 9];
// $a = ['a' => 'Lemon', "b" => 'Milk', 'c' => 'Salt', 'd' => 'Water', 'e' => 'Suger'];
 $new = array_reduce($a, 'fun', 1);
echo "<pre>";
print_r($new);
echo "</pre>";
 ?>
