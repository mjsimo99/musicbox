@extends('bands.layout')
@section('content')
@include('navbar')


<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white m-4 text-center mx-auto mt-8">
    <img class="h-48 w-full object-cover" src="{{ asset($songs->cover_image) }}" alt="Song Cover Image">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{ $songs->title }}</div>
      <p class="text-gray-700 text-base">Artist: {{ $songs->artist }}</p>
      <p class="text-gray-700 text-base">Writer: {{ $songs->writer }}</p>
      <p class="text-gray-700 text-base">Language: {{ $songs->language }}</p>
      <p class="text-gray-700 text-base">Release Date: {{ $songs->release_date }}</p>
      <p class="text-gray-700 text-base">Duration: {{ $songs->duration }}</p>
      <audio controls class="mt-4">
        <source src="{{ $songs->audio_file }}" type="audio/mpeg">
      </audio>
    </div>
  </div>
  