<?php
$color = ['a' => 'Red', 'b' => 'Green', 'c' => 'Red', 'd'=>'Yellow']; // Associated array
//$newarray = array_values($color); // array value function convert Associated array into index array
$newarray = array_unique($color); // Array unique store unique values in new array
echo "<pre>";
print_r($newarray);
echo "</pre>";
 ?>
