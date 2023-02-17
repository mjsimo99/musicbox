@extends('bands.layout')
@section('content')


<div class="card" style="margin:20px;">
    <div class="card-header">Edit band</div>
    <div class="card-body">

        <form action="" method="post">
            {{!! csrf_field() !!}}
            @method('PUT')
            {{-- @method('PATCH') --}}
            <input type="hidden" name="id" id="id" value="{{ $bands->id }}" id="id" /> 
            <label>Name</label>
            <input type="text" name="name" id="name" value="{{ $bands->name }}" id="name" />
            <label>Genre</label>
            <input type="text" name="genre" id="genre" value="{{ $bands->genre }}" id="genre" />
            <input type="submit" value="Update" class="btn btn-primary" />
                  
        </form>



    </div>
</div>