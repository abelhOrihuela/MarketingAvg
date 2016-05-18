@extends('layout.base')
@section('content')


<table class="pure-table">
  <thead>
    <tr>
      <th>Grade</th>
      <th>Position</th>
      <th>Name</th>
      <th>Salary</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($company->profiles as $profile)
    <tr>
      <td>
        <a href="{{ route('company_show_path',$profile->prof_grade ) }}"> {{ $profile->prof_grade }}</a>
      </td>
      <td>
        {{ $profile->position->pos_name }}
      </td>
      <td>
        <a href="{{route('profile_edit_path', $profile->id )}}">  {{ $profile->prof_name }}</a>
      </td>
      <td>
        $ {{ number_format ( $profile->prof_salary , 2 , "." , "," ) }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
