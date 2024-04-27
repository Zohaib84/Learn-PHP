<?php
// Array merge function
/*$student = ['Ahmed', 'Waqas', 'Asim']; // Index Array
$studentNew = ['Ashfaq', 'Alam', 'Zeeshan', 55, 42];
$Newstd =Array_merge($student , $studentNew); // array merge use in Associated and Index array
echo "<pre>";
print_r($Newstd);
echo "</pre>";*/

// index and assoicative array
/*$student = ['a' =>'Ahmed','b' => 'Waqas', 'c'=> 'Asim']; // Associatvie and index array
$studentNew = ['d' => 'Ashfaq', 'e' => 'Alam', 'f' => 'Zeeshan', 55, 02];
$Newstd =Array_merge($student , $studentNew); // array merge use in Associated and Index array
echo "<pre>";
print_r($Newstd);
echo "</pre>";*/

$student = ['a' =>'Ahmed','b' => 'Waqas', 'c'=> 'Asim']; // Associatvie
$studentNew = ['b' => ['Ashfaq'], 'e' => 'Alam', 'f' => 'Zeeshan', 55, 02]; // multidimensional array
$Newstd =Array_merge_recursive($student , $studentNew); // Mulridimension array
echo "<pre>";
print_r($Newstd);
echo "</pre>";
?>
