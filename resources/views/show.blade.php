@extends('layouts.main')

@section('content')
  <div class="anime-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
      <img src="/138006.jpg" alt="frieren" class="w-72 md:w-80 shrink-0">
      <div class="md:ms-24">
        <h2 class="text-3xl font-semibold">Frieren (2023)</h2>
        <div class="flex flex-wrap items-center text-gray-400 text-sm">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
          </svg>              
          <span class="ms-1">85%</span>
          <span class="mx-2">|</span>
          <span>Jun 22, 2001</span>
          <span class="mx-2">|</span>
          <span>Action, Slice of Life</span>
        </div>
        <div class="text-gray-300 mt-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus atque voluptatibus pariatur, repudiandae numquam similique ipsam architecto dolor eum aspernatur, recusandae deleniti culpa excepturi ex consectetur in animi, explicabo libero! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est iste unde praesentium officia explicabo, hic, aperiam minus, ad ipsam sint ut quidem esse totam aliquid possimus delectus impedit temporibus nihil.</div>
      </div>
    </div>
  </div>

@endsection