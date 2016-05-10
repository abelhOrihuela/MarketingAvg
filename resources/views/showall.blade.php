@extends('layout.base')
@section('content')

<?php
  $salaryMed=$companyGradeSalaryLow->prof_salary;
  $sizeArray=sizeOf($companyGrade);
 ?>

<table class="pure-table">
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
       for ($i=0; $i < $sizeArray; $i++) {
         $salaryMed+=($companyGrade[$i]->prof_progresion * $i);
      ?>
      <tr>
      <td >
        {{ $companyGrade[$i]->prof_grade}}
      </td>
      <td>
        <a href="">{{ $companyGrade[$i]->pos_name }}</a>
      </td>
      <td>
        $ {{
        number_format ( $companyGrade[$i]->prof_salary , 2 , "." , "," )
       }}
      </td>
      <td>
        $ {{ number_format ( ($salaryMed * -$companyGrade[$i]->prof_min) + $salaryMed , 2 , "." , "," )
           }}
      </td>
      <td>
        $ {{ number_format ( $salaryMed , 2 , "." , "," )  }}
      </td>
      <td>
        $ {{ number_format (($salaryMed * $companyGrade[$i]->prof_min) + $salaryMed , 2 , "." , "," )
           }}
      </td>
      </tr>



      <?php
           }

       ?>



    </tbody>
</table>
@stop
