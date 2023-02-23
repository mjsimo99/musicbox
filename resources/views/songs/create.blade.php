@extends('bands.layout')
@section('content')


<div class="card" style="margin:20px;">
    <div class="card-header">create new band</div>
<div class="card-body">


    <form action="{{ url('songs') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @csrf

        <label>title</label>
        <input type="text" name="title" class="form-control" /><br>
        <label>artist</label>
        <input type="text" name="artist" class="form-control" /><br>
        <label>writer</label>
        <input type="text" name="writer" class="form-control" /><br>
        <label>language</label>
        <input type="text" name="language" class="form-control" /><br>
        <label>release_date</label>
        <input type="date" name="release_date" class="form-control" /><br>
        <label>audio_file</label>
        <input type="file" name="audio_file" class="form-control" /><br>
        <label>duration</label>
        <input type="time" name="duration" class="form-control" /><br>
        <label>cover_image</label>
        <input type="file" name="cover_image" class="form-control" /><br>
        <input type="submit" value="Save"  class="btn btn-success"><br>

    </form>

</div>
</div>

@stop