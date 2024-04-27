<?php
// Multi dimention array

$employe =[
       [1 ,"Irfan", "Designer", 25000],
       [2 ,"Syed", "Developer", 45000],
       [3 ,"Shahzeb", "Manager", 55000],
       [4 ,"Imran", "Office Boy", 15000],
       [5 ,"Hakim", "Driver", 20000],
     ];
     echo "<table border = '2px' cellpadding = '5px' cellspacing = '0' >";
     echo "<tr>
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Employee Designation</th>
                <th>Employee Salary</th>
            </tr>";
          ;
// Foreach loop
// table format
foreach($employe as $emp)
{
  echo "<tr>";
  foreach($emp as $info)
  {
    echo "<td> $info </td> ";
  }
  echo "</tr>";
}
echo "</table>";
     /*for($row = 0; $row < 5; $row++){   //nested For loop
       for($col = 0; $col < 5; $col++){
         echo $emp[$row][$col] . " ";
       }
       echo "<br>";
     }*/
 ?>
