<?php
// array_replace and Array_replace_recursive function

/*$fruit = ['Banana', 'Apple', 'Gawawa', 'Mango']; //index array
$vegi = ['Pompkin', 'Ladyfinger'];
$member = ['a' => 'Asif','b' => 'Akram', 'Ahmed'];// associated array
$newarray = array_replace($fruit, $vegi, $member);

echo "<pre>";
print_r($newarray);
echo "</pre>";
*/

$array1 = ['a' => ['Blue'], 'b' => ['Black', 'Green']];
$array2 = ['a' => ['Red'], 'b' => ['White', 'Yellow']];
$array3 = ['a' => ['Pink'], 'b' => ['Grey' ]];

$result = Array_replace_recursive($array1,$array2,$array3);
print_r($result);
echo "<br>";

$result1 = Array_replace($array1,$array2,$array3);
print_r($result1);



 ?>
