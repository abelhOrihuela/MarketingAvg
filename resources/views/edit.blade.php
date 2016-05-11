@extends('layout.base')
@section('content')
<form method="post"  class=" pure-form pure-form-stacked" action="{{ route('profile_update_path',$profile->id ) }}">

  {{ csrf_field() }}
  <div class="pure-g">
    <div class="pure-u-1 pure-u-md-1-3">
      <label for="name">Name</label>
      <input type="text" name="name"  id="name" value="{{ $profile->prof_name }}">
    </div>

    <div class="pure-u-1 pure-u-md-1-3">
      <label for="salary">Salary</label>
      <input type="text" name="salary" id="salary" value="{{ $profile->prof_salary }}">
    </div>

    <div class="pure-u-1 pure-u-md-1-3">
      <label for="grade">Grade</label>
      <input type="number" name="grade" id="grade" value="{{ $profile->prof_grade }}" >
    </div>

    <div class="pure-u-1 pure-u-md-1-3">
      <label for="grade">Progresion</label>
      <input type="text" name="progresion" id="progresion" value="{{ $profile->prof_progresion }}">
    </div>

    <div class="pure-u-1 pure-u-md-1-3">
      <label for="grade">Max</label>
      <input type="text" name="max"  id="max" value="{{ $profile->prof_max }}">
    </div>

    <div class="pure-u-1 pure-u-md-1-3">
      <label for="grade">Min</label>
      <input type="text" name="min" id="min" value="{{ $profile->prof_min }}">
    </div>
    <div class="pure-u-1 pure-u-md-1-1">
      <label for="position">Position</label>

        <select id="state" name="position">
          <option value="{{ $profile->position->id }}">{{ $profile->position->pos_name }}</option>
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
