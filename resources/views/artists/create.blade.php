@extends('bands.layout')
@section('content')


<div class="card" style="margin:20px;">
    <div class="card-header">create new band</div>
<div class="card-body">


    <form action="{{ url('artists') }}" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    @csrf

    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
        <label>About</label>
        <input type="text" class="form-control" name="about" id="about" placeholder="Enter about">
        <label>Image</label>
        <input type="file" class="form-control" name="image" id="image" placeholder="Enter image">
        <label>Country</label>
        <input type="text" class="form-control" name="country" id="country" placeholder="Enter country">
        <label>Birthday</label>
        <input type="date" class="form-control" name="birthdate" id="birthday" placeholder="Enter birthday">
        <input type="submit" value="Save"  class="btn btn-success"><br>

        
</div>
</div>

@stop