@extends('layout.base')
@section('content')
<h1></h1>

<table class="pure-table">
    <thead>
        <tr>

          <th>Position</th>
          <th>Name</th>
          <th>Salary</th>
        </tr>
    </thead>
    <tbody>
@foreach ($companyGrade as $profile)
<tr>

  <td>
    {{ $profile->pos_name }}
  </td>
  <td>
    {{ $profile->prof_name }}
  </td>
  <td>
    $ {{ $profile->prof_salary }}
  </td>
</tr>
@endforeach
</tbody>
</table>
@stop
