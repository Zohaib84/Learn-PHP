<?php

// switch statment
/*$weekday = 1;
switch ($weekday) {
  case 1:
   echo "Today is Monday";
  break;
  case 2:
    echo "Today is Tuesday";
  break;
  case 3:
    echo "Today is Wednesday";
  break;
  case 4:
    echo "Today is Thursday";
  break;
  case 5:
    echo "Today is Friday";
  break;
  case 6:
    echo "Today is Saturday";
  break;
  case 7:
      echo "Today is Sunday";
   break;

  default:
    echo "Enter valid number ";

}
*/
// switch statment
$age = 25;
switch(true)  {
  case ($age >= 15 && $age<=20):
   echo "You are eligible";
  break;
  case ($age >= 25 && $age<=32):
    echo "You are Ilegible";
  break;

  default:
    echo "Enter valid number ";

}
?>
