@include('navbar')

{{-- @extends('layouts.app') --}}






<div class="flex flex-wrap justify-center mx-auto mt-6">
  @foreach ($songs as $song)
    <div class="w-fit mx-5 mb-5 bg-white rounded-xl shadow-md overflow-hidden w-[344px]">
      <div class="md:flex">
        <div class="md:flex-shrink-0">
          <a href="/songs/{{ $song->id }}">
            <img class="h-48 w-full object-cover md:w-48 h-full" src="{{ asset($song->cover_image) }}" alt="Song Cover Image">
          </a>
        </div>
        <div class="p-8">
          <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ $song->title }}</div>
          <div class="block mt-1 text-lg leading-tight font-medium text-black">{{ $song->artist }}</div>
          <p class="mt-2 text-gray-500">Release Date: {{ $song->release_date }} | Duration: {{ $song->duration }}</p>
          <audio controls class="mt-4 bg-slate-300	 hover:bg-slate-400	 text-white font-bold py-2 px-4 rounded-md shadow-md">
            <source src="{{ $song->audio_file }}" type="audio/mpeg">
            Your browser does not support the audio tag.
          </audio>
          
          {{-- <div class="mt-4 ml-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>
          </div> --}}
          <div class="mt-4 ml-3">
            <form action="{{ route('likeSong', $song->id) }}" method="POST">
              @csrf
              <button type="submit" name="like">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                </svg>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

  @endforeach



 
</div>

      
  


</div>
      

</div>
</body>
</html>


