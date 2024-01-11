@extends('layouts.main')

@section('content')
  <div class="container px-4 pt-16 pb-8 mx-auto">
    <div class="top-animes">
      <h2 class="text-lg font-semibold tracking-wider text-orange-500 uppercase">Top Animes</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <div class="mt-8">
          <a href="{{ route('show') }}">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="{{ route('show') }}" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="currently-airing mt-16">
      <h2 class="text-lg font-semibold tracking-wider text-orange-500 uppercase">Currently Airing</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/138006.jpg" alt="frieren" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
          </a>
          <div class="mt-2">
            <a href="#" class="mt-2 text-lg font-semibold hover:text-gray-300">Frieren</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
              </svg>              
              <span class="ms-1">85%</span>
              <span class="mx-2">|</span>
              <span>Jun 22, 2001</span>
            </div>
            <div class="text-gray-400 text-sm">
              Action, Slice of Life
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection