<x-layouts.main-layout title="Bienvenue sur notre site" >
    <div class="px-20 py-20">
        <h1 class="text-xl font-black py-5">List vidéo</h1>
            <div class="grid grid-cols-4 gap-4">
                @forelse ($videos as $video )
                    {{-- <p>{{ $video->title }}</p> --}}
                    {{-- <a href="{{ route('video.show', $video->id) }}"> --}}
                    <a href="videos/{{ $video->id }}" class="">  
                        <x-cards.cardVideo :title="$video->title" :description="$video->description" :url_img="$video->url_img"/>
                    </a>          
                @empty
                    <p>No video Yet</p>
                @endforelse
            </div>
            <div class="">
                {{ $videos->links() }}
            </div>

    </div>
</x-layouts.main-layout>