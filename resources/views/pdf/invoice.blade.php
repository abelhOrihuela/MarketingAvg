<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <title>World Talent Consulting</title>
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
          <th>Name</th>
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
<?php
          if ($salaryLowForGrade[$i]->prof_grade==19) {
            ?>
            <tr>
              <td colspan="7">
<h3 class="title-table">Executive positions</h3>
              </td>
        </tr>
            <?php
          }
           ?>
              <tr>
                <td class="center">
                  {{ $companyGrade[$j]->prof_grade}}
                </td>
                <td>
                  {{ $companyGrade[$j]->pos_name }}
                </td>
                <td>
                  {{ $companyGrade[$j]->prof_name }}
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
    Toda la informaci贸n contenida dentro de este documento es confidencial.
    <br>
  World Talent Consulting Copyright (c) 2015 Copyright Holder All Rights Reserved.
</footer>
  </body>
</html>
