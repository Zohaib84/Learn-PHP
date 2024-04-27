<?php
// Multidimensional Assciated array

$student = [
              "Arsalan" =>["Chemistry" => 87,
                            "Maths" => 57,
                            "Physics" => 65,
                            "Biology" => 90
                          ],
              "Ahmed" => ["Chemistry" => 72,
                          "Maths" => 73,
                          "Physics" => 67,
                          "Biology" => 69
                        ],
              "Imtiaz" => ["Chemistry" => 75,
                          "Maths" => 45,
                          "Physics" => 64,
                          "Biology" => 95
                        ],
              "Imran" => ["Chemistry" => 56,
                            "Maths" => 33,
                            "Physics" => 27,
                            "Biology" => 78
                          ],
              "Nabeel" => ["Chemistry" => 57,
                            "Maths" => 50,
                            "Physics" => 45,
                            "Biology" => 60
                          ]
            ];
            echo "<table border = '2px' cellspacing'0' cellpadding = '5px' >
            <tr>
              <th>Student Name</th>
              <th>Chemistry</th>
              <th>Maths</th>
              <th>Physics</th>
              <th>Biology</th>
              </tr>";
            foreach ($student as $key => $v1) {
              echo "<tr><td> $key </td>";
              foreach ($v1 as $v2) {
                echo "<td> $v2 </td> ";
              }
              echo "</tr>";
                }
                echo "</table>";

                echo "<pre>";
                print_r($student);
                echo "</pre>";

 ?>
