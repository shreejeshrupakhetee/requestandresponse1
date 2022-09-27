@extends('users.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Users Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $users->name }} </h5>
        <p class="card-text">Age : {{ $users->age }}</p>
        <p class="card-text">Bio: {{ $users->bio }}</p>
  </div>
    </hr>
  </div>
</div>