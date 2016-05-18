@extends('layout.base')
@section('content')
<form method="post"  class=" pure-form pure-form-stacked" action="{{ route('position_create_path') }}">
  {{ csrf_field() }}
  <div class="pure-g">
    <div class="pure-u-1 pure-u-md-1-3">
      <label for="name">Name position</label>
      <input type="text" name="name" value="" id="name" >
    </div>

    <div class="pure-u-1 pure-u-md-1-3">
      <label for="salary">Description</label>
      <input type="text" name="description" value="" id="salary">
    </div>




    <div class="pure-u-1 pure-u-md-1-3">
      <label for="grade"></label>
      <input type="submit" class="pure-button pure-button-primary"  value="Guardar" id="form">
    </div>
  </div>
</form>
@stop
