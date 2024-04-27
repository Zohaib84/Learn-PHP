<?php
// For Loop
/*for($a = 1; $a <= 10; $a = $a + 2)
{
  echo $a . " ) Learn PHP<br>";
}*/

// Nested for loop

for($a = 1; $a <= 100; $a = $a + 10){
  for($b = $a; $b < $a + 10; $b++)
  {
    echo $b . " ";
  }
  echo "<br>";
}
 ?>
