@extends('users.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New Users</div>
  <div class="card-body">
      <form action="{{ url('user') }}" method="post" enctype="multipart/form-data">
{!! csrf_field() !!}
<label>Name</label></br>
<input type="text" name="name" id="name" class="form-control"></br>
<label>Age</label></br>
<input type="text" name="age" id="bio" class="form-control"></br>
<label>Bio</label></br>
<input type="text" name="bio" id="bio" class="form-control"></br>
<label>Image</label></br>
<input type="file" name="image" id="image" class="form-control"></br>
<input type="submit" value="Save" class="btn btn-success"></br>
</form>
</div>
</div>
@stop