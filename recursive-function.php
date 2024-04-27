<?php
// Recursive Function
 /*function display($num)
 {
   if($num <= 10)
   {
     echo "$num<br>";
     display($num + 1);
   }
 }
 display(1); */

 // REcursive fucntion Factorial number
  function factorial($n)
  {
    if($n == 0)
    {
      return 1;
    }else {
     return ($n * factorial ($n- 1));
    }
  }
  echo factorial(7);
 ?>
