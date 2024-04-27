<?php
// Function Aurgument by reference

function sum($num)
{
  $num += 5;
}
function sub(&$num)
{
  $num += 7;
}
$number = 10;
sum($number);
echo "<h3>Orignal Value is $number<br></h3>";

sub($number);
echo "<h2>Orignal value is $number";


 ?>
