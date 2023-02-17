@extends('bands.layout')
@section('content')


<div class="card" style="margin:20px;">
    <div class="card-header">create new band</div>
<div class="card-body">


    <form action="{{ url('bands') }}" method="post"
    {!! csrf_field() !!}
    @csrf

    <label>name</label>
    <input type="text" name="name" class="form-control" /><br>
    <label>genre</label>
    <input type="text" name="genre" class="form-control" /><br>
    <input type="submit" value="Save"  class="btn btn-success"><br>
</div>
</div>

@stop