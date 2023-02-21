@include('navbar')

 


<div class="flex flex-wrap justify-center mx-auto">



    <div class="w-fit mx-5 mb-5 bg-white rounded-xl shadow-md overflow-hidden">
        <div class="md:flex">
          <div class="md:flex-shrink-0">
            <img class="h-48 w-full object-cover md:w-48 h-full" src="https://source.unsplash.com/random/800x600" alt="Music Image">
          </div>
          <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Music Name</div>
            <div class="block mt-1 text-lg leading-tight font-medium text-black">Music Artist</div>
            <p class="mt-2 text-gray-500">Release Date: 01-01-2022 | Duration: 3:45</p>
            <audio controls class="mt-4">
              <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
            <div class="mt-4">
              <span class="star" data-value="1">☆</span>
              <span class="star" data-value="2">☆</span>
              <span class="star" data-value="3">☆</span>
              <span class="star" data-value="4">☆</span>
              <span class="star" data-value="5">☆</span>
            </div>
          </div>
        </div>
      </div>
      
      <script>
        const stars = document.querySelectorAll('.star');
      
        function handleClick(e) {
          const value = e.target.getAttribute('data-value');
          stars.forEach(star => {
            if (star.getAttribute('data-value') <= value) {
              star.classList.add('text-teal-600');
              star.classList.remove('text-gray-400');
            } else {
              star.classList.add('text-gray-400');
              star.classList.remove('text-teal-600');
            }
          });
        }
      
        stars.forEach(star => star.addEventListener('click', handleClick));
      </script>
      
      <div class="w-fit mx-5 mb-5 bg-white rounded-xl shadow-md overflow-hidden">
        <div class="md:flex">
          <div class="md:flex-shrink-0">
            <img class="h-48 w-full object-cover md:w-48 h-full" src="https://source.unsplash.com/random/800x600" alt="Music Image">
          </div>
          <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Music Name</div>
            <div class="block mt-1 text-lg leading-tight font-medium text-black">Music Artist</div>
            <p class="mt-2 text-gray-500">Release Date: 01-01-2022 | Duration: 3:45</p>
            <audio controls class="mt-4">
              <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
            <div class="mt-4">
              <span class="text-teal-600">☆</span>
              <span class="text-teal-600">☆</span>
              <span class="text-teal-600">☆</span>
              <span class="text-gray-400">☆</span>
              <span class="text-gray-400">☆</span>
            </div>
          </div>
        </div>
      </div><div class="w-fit mx-5 mb-5 bg-white rounded-xl shadow-md overflow-hidden">
        <div class="md:flex">
          <div class="md:flex-shrink-0">
            <img class="h-48 w-full object-cover md:w-48 h-full" src="https://source.unsplash.com/random/800x600" alt="Music Image">
          </div>
          <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Music Name</div>
            <div class="block mt-1 text-lg leading-tight font-medium text-black">Music Artist</div>
            <p class="mt-2 text-gray-500">Release Date: 01-01-2022 | Duration: 3:45</p>
            <audio controls class="mt-4">
              <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
            <div class="mt-4">
              <span class="text-teal-600">☆</span>
              <span class="text-teal-600">☆</span>
              <span class="text-teal-600">☆</span>
              <span class="text-gray-400">☆</span>
              <span class="text-gray-400">☆</span>
            </div>
          </div>
        </div>
      </div>
  
  
</div>
      
</body>
</html>