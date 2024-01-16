@extends('layouts.main')

@section('content')
  <div class="anime-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
      <img src="{{ $anime['picture_url'] }}" alt="{{ $anime['title_ov'] }}" class="w-72 shrink-0">
      <div class="md:ms-24">
        <h2 class="text-3xl font-semibold">{{ $anime['title_ov'] }}</h2>
        <div class="flex flex-wrap items-center text-gray-400 text-sm">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
          </svg>              
          <span class="ms-1">{{ $anime['statistics']['score'] }}</span>
          <span class="mx-2">|</span>
          <span>{{ $anime['information']['aired'] }}</span>
          <span class="mx-2">|</span>
          <span>{{ $anime['information']['status'] }}</span>
          <span class="mx-2">|</span>
          <span>
            @foreach ($anime['information']['genres'] as $genre)
              {{ $genre['name'] }}@if (!$loop->last), @endif
            @endforeach
          </span>
          <span class="mx-2">|</span>
          <span>
            @foreach ($anime['information']['studios'] as $studio)
              {{ $studio['name'] }}@if (!$loop->last), @endif
            @endforeach
          </span>
        </div>
        <div class="text-gray-300 mt-8">{{ $anime['synopsis'] }}</div>
      </div>
    </div>
  </div>

  <div class="anime-characters border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
      <h2 class="text-4xl font-semibold">Characters</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($anime['characters'] as $character)
          @if ($loop->index < 5)
          <div class="mt-8">
            <a href="#">
              <img src="{{ $character['picture_url'] }}" alt="{{ $character['name'] }}" class="hover:opacity-75 transition ease-in-out duration-150">
            </a>
            <div class="mt-2">
              <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $character['name'] }}</a>
            </div>
          </div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
@endsection
