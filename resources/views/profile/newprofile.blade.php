@extends('layout.base')
@section('content')
<form method="post"  class=" pure-form pure-form-stacked" action="{{ route('profile_create_path') }}">

  {{ csrf_field() }}
  <div class="pure-g">
    <div class="pure-u-1 pure-u-md-1-3">
      <label for="name">Name</label>
      <input type="text" name="name" value="" id="name" >
    </div>

    <div class="pure-u-1 pure-u-md-1-3">
      <label for="salary">Salary</label>
      <input type="text" name="salary" value="" id="salary">
    </div>

    <div class="pure-u-1 pure-u-md-1-3">
      <label for="grade">Grade</label>
      <input type="number" name="grade" value="" id="grade" >
    </div>

    <div class="pure-u-1 pure-u-md-1-3">
      <label for="grade">Progresion</label>
      <input type="text" name="progresion" value="" id="progresion" >
    </div>

    <div class="pure-u-1 pure-u-md-1-3">
      <label for="grade">Max</label>
      <input type="text" name="max" value="" id="max" >
    </div>

    <div class="pure-u-1 pure-u-md-1-3">
      <label for="grade">Min</label>
      <input type="text" name="min" value="" id="min" >
    </div>
    <div class="pure-u-1 pure-u-md-1-1">
      <label for="position">Position</label>

        <select id="state" name="position">
          @foreach ($positions as $position)
            <option value="{{ $position->id }}">{{ $position->pos_name }}</option>
          @endforeach
        </select>
    </div>

    <div class="pure-u-1 pure-u-md-1-3">
      <label for="grade"></label>
      <input type="submit" class="pure-button pure-button-primary"  value="Guardar" id="form">

    </div>

  </div>



</form>
@stop
