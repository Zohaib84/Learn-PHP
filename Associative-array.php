<?php
// Associative Array

// $age = array("Zohaib" => 27, "Irfan" => 29, "Farman" => 35);
$age = [
  "Zohaib"=> 27,
  "Irfan" => 29,   // New Formate Same data type
  "Farman"=>35
];



 $age = [
   "Zohaib" => 27.27,
   "Irfan" => "29",   // New Formate Different datatype
   "Farman" => 35
 ];
echo "<pre>"; // tag shows values in arranged foam
print_r($age);
echo "</pre>";
var_dump($age); // function shows values and Datatype
// $age["Zohaib"] = 26;

echo $age["Zohaib"] . "<br>";
echo $age["Irfan"] . "<br>";
echo $age["Farman"];

 ?>
