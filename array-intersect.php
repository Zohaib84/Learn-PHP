<?php
// Array array_intersct functions
//$newarray = array_intersect($a, $b);  // Array Intersect FUnction intersect Values
//$newarray = array_intersect_key($a, $b); // Array intersect key function intersect key
//$newarray = array_intersect_assoc($a1, $a2); // Intersect assoc intersect key and Values
//$newarray = array_intersect_uassoc($a1, $a2, "compare"); Uassoc intersect key and value with function
//$newarray = array_intersect_ukey($a1, $a2, "compare"); // Ukey intersect keys using user define compare function

//$newarray = array_Uintersect($a1, $a2, "compare"); // uINTERSECT VALUE USING USIER DEFINE COMPARE FUNCTION

function compare($a, $b)
{
    return ($a === $b) ? 0 : (($a > $b) ? 1 : -1);
}

function compareValue($a, $b)
{
 return ($a === $b) ? 0 : (($a > $b) ? 1 : -1);
}

$a1 = ['a' => 'Red', 'b' => 'Green', 'c' => 'Black', 'd' => 'White'];
$a2 = ['a' => 'Red', 'f' => 'Green', 'c' => 'Yellow'];
//$newarray = array_uintersect_uassoc($a1, $a2, 'compare'); // Uintersect uassoc with user define compare func

$newarray = array_uintersect_assoc($a1, $a2, 'compare', "compareValue"); // Uintersect assoc with user define compare 2 func

echo "<pre>";
print_r($newarray);
echo "</pre>";

 ?>
