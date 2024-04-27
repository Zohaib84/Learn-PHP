<?php
// Array column and array chunk functions
/*$s = array(   // Multidimention Array
          array('id' => 8466,
                'First_Name' => 'Zohaib',
                'Last_Name' => 'Rizwan',
                'Title' => 'Software Engineer'
              ),
              array('id' => 8799,
                    'First_Name' => 'Ahmed',
                    'Last_Name' => 'Khan',
                    'Title' => 'Civil Engineer Engineer'
                  ),
                  array('id' => 5121,
                        'First_Name' => 'Ashfaq',
                        'Last_Name' => 'Alam',
                        'Title' => 'Mechinical Engineer'
                      ),
                      array('id' => 1234,
                            'First_Name' => 'Moez',
                            'Last_Name' => 'Ali',
                            'Title' => 'Architecture Engineer'
                          ),
                          array('id' => 8226,
                                'First_Name' => 'Yasir',
                                'Last_Name' => 'Alam',
                                'Title' => 'Software Engineer'
                              )
                );*/
  //$newArray = array_column($s, 'First_Name', 'id'); array column  // Multidimention array

//$num = range(1,10); // create an array from 1 - 10 index array
//$newArray = array_chunk($num, 3); //chunk array into smaler Multidimention array  size of 3
// Array flip and Array change key case
$a = array('id' => 8466,
      'First_Name' => 'Zohaib',
      'Last_Name' => 'Rizwan',
      'Title' => 'Software Engineer'
    );

// $newArray = array_flip($a); // Flip the array keys and Value and store in new array
//$newArray = array_change_key_case($a, CASE_UPPER); // ConverT key case into Upper case

$newArray = array_change_key_case($a, CASE_LOWER); // ConverT key case into LOWER case
  echo "<pre>";
  print_r($newArray);
  echo "</pre>";
 ?>
