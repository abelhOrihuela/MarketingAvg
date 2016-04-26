@extends('layout.base')
@section('content')
<h1>{{ $company->comp_name }}</h1>

<table class="pure-table">
    <thead>
        <tr>

          <th>Position</th>
          <th>Name</th>
          <th>Salary</th>
        </tr>
    </thead>
    <tbody>
@foreach ($company->profiles as $profile)
<tr>

  <td>
    {{ $profile->position->pos_name }}
  </td>
  <td>
    {{ $profile->prof_name }}
  </td>
  <td>
    {{ $profile->prof_salary }}
  </td>
</tr>
@endforeach
</tbody>
</table>
@stop
