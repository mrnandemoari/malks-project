<div class="mt-8">
    <a href="{{ route('animes.show', $anime['myanimelist_id']) }}">
        <img src="{{ $anime['picture_url'] }}" alt="{{ $anime['title'] }}" class="hover:opacity-80 transition duration-150 ease-in-out w-full">
    </a>
    <div class="mt-2">
        <a href="{{ route('animes.show', $anime['myanimelist_id']) }}" class="mt-2 text-lg font-semibold hover:text-gray-300">{{ $anime['title'] }}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 fill-current text-orange-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
        </svg>              
        <span class="ms-1">{{ $anime['score'] }}</span>
        <span class="mx-2">|</span>
        <span>{{ $anime['type'] }}</span>
        </div>
        <div class="text-gray-400 text-sm">
            {{ $anime['aired_on'] }}
        </div>
    </div>
</div>