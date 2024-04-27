<?php

// if else statment
  /*  $x = 10;
    if ($x === 10) {
        echo "<h1>X is Greater. Welcome to Learning PHP class Day 2</h1>";
    }
    else {
      echo "<h2>X is less. This is the PHP learning class</h2>";
    }*/

  /*  $name = "Zohaib Rizwan";
    $gender = "Female";
    if ($gender == "Male") {
      echo "Hello Mr." . $name;
    }
  else {
    echo "He is not Zohaib Rizwan";
  }*/

  //if-else-if statment
$per = 23;
if ($per >= 80 && $per <=100) {
  echo "Grade A1";
}
elseif($per >= 60 && $per <80) {
  echo "Grade A";}
elseif($per >= 45 && $per <60) {
  echo "Grade B";}
elseif($per >= 33 && $per <45) {
  echo "Grade C";}
elseif($per < 33) {
  echo "Fail";
}
else {
  echo "Enter the valid Value";
}
?>
