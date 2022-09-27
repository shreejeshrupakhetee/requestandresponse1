@section('content')
@extends('users.layout')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit User</div>
<div class="card-body">

<form action="{{ url('user/' .$users->id) }}" method="post">
{!! csrf_field() !!}
@method("PATCH")
<input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
<label>Name</label></br>
<input type="text" name="name" id="name" value="{{$users->name}}" class="form-control"></br>
<label>Age</label></br>
<input type="text" name="age" id="age" value="{{$users->age}}" class="form-control"></br>
<label>Bio</label></br>
<input type="text" name="bio" id="mobile" value="{{$users->bio}}" class="form-control"></br>
<input type="submit" value="Update" class="btn btn-success"></br>
</form>
</div>
</div>
@stop