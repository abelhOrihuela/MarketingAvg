@extends('layout.base')
@section('content')


<?php
  $salaryMed=$companyGradeSalaryLow->prof_salary;
  $sizeArray=sizeOf($companyGrade);
  $promedio=0;
 ?>


<h2>{{ $companyGradeSalaryLow->comp_id }}</h2>
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

      ?>

      <td>
        <a href="">{{ $companyGrade[$i]->pos_name }}</a>
      </td>
      <td>
        $ {{ number_format ( $companyGrade[$i]->prof_salary , 2 , "." , "," )
           }}
      </td>
      <td>
        $ {{ number_format (($salaryMed * -$companyGrade[$i]->prof_min) + $salaryMed , 2 , "." , "," )}}
      </td>
      <td>
        $  {{ number_format ( $salaryMed , 2 , "." , "," ) }}
      </td>
      <td>
        $ {{ number_format (($salaryMed * $companyGrade[$i]->prof_min) + $salaryMed , 2 , "." , "," )}}

      </td>
      </tr>



      <?php
       $salaryMed+=1*($companyGrade[$i]->prof_progresion * $i);
           }

       ?>



    </tbody>

</table>
<a href="{{ route('company_pdf_path') }}">Download</a>
@stop
