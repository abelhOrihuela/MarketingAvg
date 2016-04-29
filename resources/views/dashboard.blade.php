@extends('layout.base')
@section('content')


<h1>Dashboard</h1>

<div class="pure-menu pure-menu-horizontal pure-menu-scrollable">
    <a href="#" class="pure-menu-link pure-menu-heading">Home</a>
    <ul class="pure-menu-list">

        <li class="pure-menu-item"><a href="#" class="pure-menu-link">New Company</a></li>
        <li class="pure-menu-item"><a href="{{ route('profile_new_path') }}" class="pure-menu-link">New Profile</a></li>
        <li class="pure-menu-item"><a href="{{ route('position_store_path') }}" class="pure-menu-link">New Position</a></li>
        <li class="pure-menu-item"><a href="{{ route('company_showall_path') }}" class="pure-menu-link">Company all Position's</a></li>


    </ul>
</div>

@stop
