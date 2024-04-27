<?php
// goto statment
for ($a = 0, $b = 20; $a < 30; $a++)
{
  while ($b--){
    if($b == 17){
      goto end;
    }
  }
}
echo "a = $a";
end :
echo "j hit 17";

 ?>
