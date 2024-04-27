<?php
// Multidimentional Array with list function
$employee = [
            [1, "Irfan" , "Managing DIrector", 70000],
            [2, "Shahzain", "Office Manager", 60000],
            [3, "Faseh", "Helper", 35000],
            [4, "Waqar", "Site Officer", 45000],
            [5, "Farman", "Driver", 40000]
            ];
   echo "<table border = '2px' cellpadding = '5px'  cellspacing = '0'>
   <tr>
    <th>ID No</th>
    <th>Employee Name</th>
    <th>Designation</th>
    <th>Salary</th>
    </tr>";
  foreach ($employee as list($id, $name, $designation, $salary)) {
    echo "<tr>
    <td>$id</td>
    <td>$name</td>
    <td>$designation</td>
    <td>$salary</td>
    </tr>";
  }
  echo "</table>";
 ?>
