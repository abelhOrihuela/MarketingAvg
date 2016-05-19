@extends('layout.base')
@section('content')
<form class="pure-form pure-form-stacked" action="{{ route('company_create_path') }}" method="post">
    <fieldset>
      {{ csrf_field() }}
        <legend>Register new company</legend>

        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="first-name">Name</label>
                <input id="first-name" class="pure-u-23-24" type="text" name="company_name">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last-name">Description</label>
                <input id="last-name" class="pure-u-23-24" type="text" name="company_description">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="email">Contact</label>
                <input id="email" class="pure-u-23-24" type="email" required name="company_contact">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="city">City</label>
                <input id="city" class="pure-u-23-24" type="text" name="company_city">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="state">Core Bussines</label>
                <select id="state" class="pure-input-1-2" name="company_core">
                    <option value="1">Automotive</option>
                    <option value="2">Aviation</option>
                    <option value="3">Other</option>
                </select>
            </div>
        </div>



        <button type="submit" class="pure-button pure-button-primary">Save</button>
    </fieldset>
</form>
@stop
