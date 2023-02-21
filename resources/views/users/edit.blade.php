@extends('bands.layout')
@section('content')


<div class="card" style="margin:20px;">
    <div class="card-header">Edit band</div>
    <div class="card-body">

        <form action="{{ url('users/'.$users->id) }}" method="POST">
            @csrf
            @method("PATCH")
            {{-- @method('PATCH') --}}
            <input type="hidden" name="id" id="id" value="{{ $users->id }}" id="id" />
            <label>Name</label>
            <input type="text" name="name" id="name" value="{{ $users->name }}" id="name" />
            <label>Email</label>
            <input type="text" name="email" id="genre" value="{{ $users->email }}" id="genre" />
            <label>Email</label>
            <input type="text" name="password" id="genre" value="{{ $users->password }}" id="genre" />
            <input type="submit" value="Update" class="btn btn-primary" />

        </form>



    </div>
</div>
