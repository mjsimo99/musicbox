@include('navbar')    
    
    
    


<div class="mx-5 mt-5 flex sm:grid-cols-playlists-mobile md:grid-cols-playlists-tablet lg:grid-cols-playlists-desktop gap-5">
    @foreach ($artists as $artist)


      <a href="#" class="relative p-4 rounded-md bg-[#181818] hover:bg-[#272727] duration-200 group w-[204px]">
        <div class="relative overflow-hidden">
          {{-- <img src="https://fakeimg.pl/600/7f1d1d/fff?text=Cover&amp;font=lobster" class="rounded shadow-lg"> --}}
          <img class="rounded shadow-lg" src="{{ asset($artist->image) }}" alt="Artists Image">

          <h3 class="mt-4 mb-1 font-semibold tracking-wide capitalize clo text-white">{{ $artist->name }}</h3>
          <p class="text-sm text-[#b3b3b3] line-clamp-2">{{ $artist->about }}</p>
        </div>
      </a>
      

    @endforeach
    
    
  </div>




























</div>