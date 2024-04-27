<?php
// Index array

//$color = array("red" , "Green" , 202 , 2.12 ); easy structure
//$color = ["red" , "Green" , 202 , 2.12 ]; // 2nd structure

// Popular format
/*$color[0] = "Red";
$color[1] = "Green";
$color[2] = "Blue";
$color[3] = "Yellow"; */
/*
echo $color[0] . "<br>"; // Call by index value
echo $color[1] . "<br>";
echo $color[2] . "<br>";
echo $color[3];

echo "<pre>"; //Pre Formated tag
print_r($color);
echo "</pre>"; */

// for loop Array
$color = ["red" , "Green" , 202 , 2.12 ];
for($x = 0; $x < 4; $x++){
  echo $color[$x] . "<br>";
}
 ?>
