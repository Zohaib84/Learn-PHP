<?php
// Function
/*Function hello(){
  echo "Hello this is function<br>";
}
hello();
hello();
hello();
hello();*/

// function with one aurgument
/*function family_name($fn) {
  echo "$fn Rizwan.<br>";
}

family_name("Zohaib");
family_name("Sohail");
family_name("Rohail");
*/

//function with two aurgument

/*function family_name($fn, $year){
  echo "$fn Rizwan. Born in $year<br>";
}
family_name("Zohaib" , "1996");
family_name("Rohail" , "1994");
family_name("Sohail" , "1992");*/
// Function with Retturn Value

// Function with three parameter
function sum($math, $eng, $sci) //sum function
{
  $s = $math + $eng + $sci;
  return $s;
}
function percent($t) // Percentage function
{
  $per = $t / 3;
  echo "$per" . "%";
}
$total = sum(55 , 75, 85);
percent($total);
?>
