@extends('layouts.main')

@section('content')
  <div class="container px-4 pt-16 pb-8 mx-auto">
    <div class="top-animes">
      <h2 class="text-lg font-semibold tracking-wider text-orange-500 uppercase">Top Animes</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($topAllAnimes as $anime)
          <x-anime-card :anime="$anime"/>
        @endforeach
      </div>
    </div>
    <div class="currently-airing mt-16">
      <h2 class="text-lg font-semibold tracking-wider text-orange-500 uppercase">Currently Airing</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($topAiringAnimes as $anime)
          <x-anime-card :anime="$anime"/>
        @endforeach
      </div>
    </div>
  </div>
@endsection