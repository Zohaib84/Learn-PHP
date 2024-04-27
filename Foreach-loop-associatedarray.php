<?php
// For each loop in Associated array
// For each loop is mainly used in arrays

$age = [
    "Zohaib" => 29,
    "Irfan" => 28,
    "Farman" => 22,
    "Alam" => 20
 ];
// echo "<ul>"; // HTML tag unorderlist
foreach ($age as $x => $y) {
  echo $x . " = " . $y . " years old" . "<br>"; // Complex
//echo "<li>$x  =  $y   years old </li>"; // Simple structure but gives same result

}
// echo "</ul>";
 ?>
