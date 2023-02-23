<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

    <nav class="bg-[#070707] flex-1 flex justify-between items-center py-[10px] px-[13px] sm:px-[32px] sticky top-0 z-10">
    <div class="flex">
      <a href="#sidebar" class="mr-[8px] text-[#969696] p-1 -ml-1.5 inline-block lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </a>
      <a href="/"class="text-white text-xl font-bold">Musicbox</a>
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
   

