@extends('bands.layout')
@section('content')


<div class="card" style="margin:20px;">
    <div class="card-header">Band Page</div>
<div class="card-body">
    <div class="card-body">
        <h5 class="card-title">Name : {{ $bands->name }}</h5>
        <p class="card-text">Genre : {{ $bands->genre }}</p>

</div>