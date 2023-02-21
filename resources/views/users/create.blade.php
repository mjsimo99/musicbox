@extends('bands.layout')
@section('content')


<div class="card" style="margin:20px;">
    <div class="card-header">create new band</div>
<div class="card-body">


    <form action="{{ url('users') }}" method="post"
    {!! csrf_field() !!}
    @csrf

    <label>name</label>
    <input type="text" name="name" class="form-control" /><br>
    <label>email</label>
    <input type="email" name="email" class="form-control" /><br>
    <label>password</label>
    <input type="password" name="password" class="form-control" /><br>
    <input type="submit" value="Save"  class="btn btn-success"><br>
</div>
</div>

@stop