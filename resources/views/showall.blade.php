@extends('layout.base')
@section('content')

<?php

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
    for ($i=0; $i < sizeOf($salaryLowForGrade); $i++) {
      $salaryMed=$salaryLowForGrade[$i]->prof_salary;
      for ($j=0; $j < sizeOf($companyGrade); $j++) {
        if ($salaryLowForGrade[$i]->prof_grade==$companyGrade[$j]->prof_grade) {
          $salaryMed+=($companyGrade[$j]->prof_progresion * $j);
          ?>

          <tr>
            <td >
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
<div class="item-download">
  <a href="{{ route('company_pdf_path') }}"><img src="../img/PDF-download.png" alt="" style="width:60px"/></a>
Download
</div>

@stop
