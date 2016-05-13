<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
      <link rel="stylesheet" href="css/blog.css">
      <link rel="stylesheet" href="../css/blog.css">
  </head>
  <body>



    <?php

    $sizeArray=sizeOf($companyGrade);


    ?>
    <div class="img-header">
        <img src="img/logo.png" alt="" />
    </div>
    <h2 class="title-table">Analisis de sueldos</h2>


    <table class="pure-table font-table-wtc">
      <thead>
        <tr>
          <th>Grade</th>
          <th>Position</th>
          <th>Salary</th>
          <th>Min</th>
          <th>Med</th>
          <th>Max</th>
        </tr>
      </thead>
      <tbody>

        <?php
        for ($i=0; $i < sizeOf($salaryLowForGrade); $i++) {
          $salaryMed=$salaryLowForGrade[$i]->prof_salary;
          for ($j=0; $j < sizeOf($companyGrade); $j++) {
            if ($salaryLowForGrade[$i]->prof_grade==$companyGrade[$j]->prof_grade) {
              $salaryMed+=($companyGrade[$j]->prof_progresion * $j);
              ?>

              <tr>
                <td class="center">
                  {{ $companyGrade[$j]->prof_grade}}
                </td>
                <td>
                  {{ $companyGrade[$j]->pos_name }}
                </td>
                <td>
                  $ {{
                    number_format ( $companyGrade[$j]->prof_salary , 2 , "." , "," )
                  }}
                </td>
                <td>
                  $ {{ number_format ( ($salaryMed * -$companyGrade[$j]->prof_min) + $salaryMed , 2 , "." , "," )
                }}
              </td>
              <td>
                $ {{ number_format ( $salaryMed , 2 , "." , "," )  }}
              </td>
              <td>
                $ {{ number_format (($salaryMed * $companyGrade[$j]->prof_min) + $salaryMed , 2 , "." , "," )
              }}
            </td>
          </tr>

              <?php
            }
          }
        }


          ?>



    </tbody>
    </table>
<footer class="footer-table">
  <br>
    Toda la información contenida dentro de este documento es confidencial.
    <br>
  World Talent Consulting Copyright (c) 2015 Copyright Holder All Rights Reserved.
</footer>

  </body>
</html>
