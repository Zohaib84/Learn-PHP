<?php
// Array Slice Function
//$employe = ['Ahmed', 'Amad', 'Zaryab', 'Imran', 'Hamid']; // index array
/*$employe = ['a' => 'Ahmed', "b" => 'Amad', '3' => 'Zaryab', '4' => 'Imran', 'c' => 'Hamid']; // Associative array
$newarray = array_slice($employe, 2, 4, true); // Slice Function return values from array
echo "<pre>";
print_r($newarray);
echo "</pre>";*/

// Array Splice function
/*$employe = ['Ahmed', 'Amad', 'Zaryab', 'Imran', 'Hamid'];
$student = ['Alam khan', 'Imad Khan', 'Irshad Khan'];
// array_splice($employe, 1, 3, $student) // Replace 1 to 3 index values
array_splice($employe, count($employe), 0, $student); // adds  std array data at end of employe array
echo "<pre>";
print_r($employe);
echo "</pre>";*/

// Array key function
$students= [
            'First' => 'Ahmed',
            'Second' => 'Amad',
            'Third' => 'Kamran',
            'Fourth' => 'Zeeshan'
            ];

            /*$newarray = array_keys($students);
            echo "<pre>";
            print_r($newarray);
            echo "</pre>";*/

            $newarray = key_exists('Third', $students);
            if($newarray){
              echo "Key Exists !";
            }
            else {
              echo "Key dose not Exist !";
            }

?>
