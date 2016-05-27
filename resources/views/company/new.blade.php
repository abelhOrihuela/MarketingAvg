@extends('layout.base')
@section('content')

<div class="msg-alert">

</div>
<form class="pure-form pure-form-stacked"  id="company__new-js">
  <fieldset>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <legend>Register new company</legend>

    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-3">
        <label for="comp_name">Name</label>
        <input id="comp_name" class="pure-u-23-24" type="text"  >
      </div>

      <div class="pure-u-1 pure-u-md-1-3">
        <label for="last-name">Description</label>
        <input id="comp_description"  class="pure-u-23-24" type="text" >
      </div>

      <div class="pure-u-1 pure-u-md-1-3">
        <label for="email">Contact</label>
        <input id="comp_contact"  class="pure-u-23-24" type="text"  >
      </div>

      <div class="pure-u-1 pure-u-md-1-3">
        <label for="city">City</label>
        <input id="comp_city"  class="pure-u-23-24" type="text" >
      </div>

      <div class="pure-u-1 pure-u-md-1-3">
        <label for="state">Core Bussines</label>
        <select id="comp_core"  class="pure-input-1-2" >
          <option value="1">Automotive</option>
          <option value="2">Aviation</option>
          <option value="3">Other</option>
        </select>
      </div>
    </div>
    <button type="submit" class="pure-button pure-button-primary"  >Save</button>
  </fieldset>
</form>


<script src="{{ asset('js/jquery-1.12.1.min.js')}}" charset="utf-8"></script>
<script src="{{ asset('js/company.js')}}" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#company__new-js').submit(function(event) {
    event.preventDefault();
    var formData = {
      'comp_name'          : $('#comp_name').val(),
      'comp_description'   : $('#comp_description').val(),
      'comp_contact'       : $('#comp_contact').val(),
      'comp_city'          : $('#comp_city').val(),
      'comp_core'          : $('#comp_core').val()
    };

    $.ajax({
      type    : 'POST', // define the type of HTTP verb we want to use (POST for our form)
      url     : '/new/company', // the url where we want to POST
      data    : formData, // our data object
      dataType  : 'json', // what type of data do we expect back from the server
      encode    : true
    })
    .done(function(data) {
      console.log(data);
      if ( ! data.success) {

        $('.msg-alert').append('<div class="alert alert-success alert-success-js" role="alert">' + data.message + '<div>'+"x"+'</div></div>');




      } else {
        alert("Hola1");
      }
    })
    .fail(function(data) {
    });
  });
});
</script>
@stop
