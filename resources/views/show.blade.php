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
    <tr>

      <td rowspan="{{ sizeOf($companyGrade) }}">
        {{ $id }}
      </td>

      <?php
       for ($i=0; $i < $sizeArray; $i++) {
         $salaryMed+=($companyGrade[$i]->prof_progresion * $i);
      ?>

      <td>
        <a href="">{{ $companyGrade[$i]->pos_name }}</a>
      </td>
      <td>
        $ {{ $companyGrade[$i]->prof_salary }}
      </td>
      <td>
        $ {{ ($salaryMed * -$companyGrade[$i]->prof_min) + $salaryMed }}
      </td>
      <td>
        $ {{ $salaryMed }}
      </td>
      <td>
        $ {{ ($salaryMed * $companyGrade[$i]->prof_min) + $salaryMed }}
      </td>
      </tr>



      <?php
           }

       ?>



    </tbody>
</table>
@stop
