<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spotify</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-[#070707]">


  {{-- <nav class="bg-[#070707] flex-1 flex justify-between items-center py-[10px] px-[13px] sm:px-[32px] sticky top-0 z-10">
    <div class="flex">
      <a href="#sidebar" class="mr-[8px] text-[#969696] p-1 -ml-1.5 inline-block lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </a>
      <a href="/"class="text-white text-xl font-bold">Musicbox</a>
    </div>
    <div>
      <button class="text-white text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105">Sign Up</button>
      <button class="bg-white text-[#2e2e2e] text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105">Log In</button>
    </div>
  </nav>
   --}}







<div class="flex flex-grow overflow-auto">

  <aside id="sidebar" class="bg-black w-[256px] text-[#b2b2b2] overflow-hidden flex flex-col fixed lg:sticky top-0 z-30 h-screen lg:h-auto -translate-x-full target:translate-x-0 lg:translate-x-0 transition-transform peer" style="height:100vh;">
    <a href="/"class="text-white text-xl font-bold m-4">Musicbox</a>

      <nav>
        <a href="#" class="flex items-center text-white bg-[#282828] mx-2 px-4 py-2 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
          <span class="ml-4 text-sm font-semibold">Home</span>
        </a>
        <a href="/artists" class="flex items-center hover:text-white mx-2 px-4 py-2 rounded duration-300">
          <svg xmlns="http://www.w3.org/2000/svg"  class="h-6 w-6" viewBox="0 0 24 24" fill="none">
            <path d="M12 2C9.87827 2 8.19652 3.68175 8.19652 5.80347C8.19652 7.92519 9.87827 9.60694 12 9.60694C14.1217 9.60694 15.8035 7.92519 15.8035 5.80347C15.8035 3.68175 14.1217 2 12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M20 22C19.4383 19.119 16.7985 17 13.5 17C10.2015 17 7.56172 19.119 7 22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M4 22C4.56172 19.119 7.20149 17 10.5 17C13.7985 17 16.4383 19.119 17 22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          
          
          <span class="ml-4 text-sm font-semibold">Artists</span>
        </a>
        <a href="#" class="flex items-center hover:text-white mx-2 px-4 py-2 rounded duration-300 mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
          </svg>
          <span class="ml-4 text-sm font-semibold">Your Library</span>
        </a>
        <a href="#" class="flex items-center hover:text-white mx-2 px-4 py-2 rounded duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span class="ml-4 text-sm font-semibold">Create Playlist</span>
        </a>
        <a href="#" class="flex items-center hover:text-white mx-2 px-4 py-2 rounded duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
          </svg>
          <span class="ml-4 text-sm font-semibold">Liked Songs</span>
        </a>
      </nav>
  
    </aside>
    <a href="#" class="fixed inset-0 bg-black opacity-0 peer-target:opacity-50 pointer-events-none peer-target:pointer-events-auto z-20 lg:hidden cursor-default transition-opacity"></a>
    <div class="flex-1 overflow-auto">

      
      <nav class="bg-[#070707] flex-1 flex justify-between items-center py-[10px] px-[13px] sm:px-[32px] sticky top-0 z-10">
        <div class="flex">
          <a href="#sidebar" class="mr-[8px] text-[#969696] p-1 -ml-1.5 inline-block lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </a>
          
        </div>
        <div>
          @auth
            <div class="relative inline-block">
              <button class="bg-white text-[#2e2e2e] text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105">{{ Auth::user()->name }}</button>
              <ul class="absolute right-0 mt-[4px] py-2 w-48 bg-white rounded-md shadow-lg z-20">
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                  </form>
                </li>
              </ul>
            </div>
          @else
            <a href="{{ route('register') }}" class="text-white text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105">Sign Up</a>
            <a href="{{ route('login') }}" class="bg-white text-[#2e2e2e] text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105">Log In</a>
          @endauth
        </div>
      </nav>
  
  
  
  
    