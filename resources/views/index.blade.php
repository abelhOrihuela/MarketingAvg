@extends('layout.base')
@section('content')
<h3>{{ $company->comp_name  }}</h3>
<nav>
  <a href="{{ route('company_showall_path') }}" class="pure-menu-link">Company all Position's</a>
<br>
  <ul>
    Grades :

    @foreach( $grades as $grade)


    <a href="{{ route('company_show_path',$grade->prof_grade ) }}"><button class="button-success pure-button icon-search"> {{ $grade->prof_grade }}</button></a>


@endforeach


  </ul>
</nav>
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
    {{ $profile->prof_grade }}
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
