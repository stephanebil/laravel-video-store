<x-layouts.main-layout title="Bienvenue sur notre site" >
    <div class="px-20 py-20">
        <h1 class="text-xl font-black py-5">vidéo : {{ $video->title }} </h1>
        <img src="{{ $video->url_img }}" alt="" class="">
        <div class="pt-5">
            <p class="">{{ $video->nationality }}</p>
            <p class="text-blue-500">Acteur: {{ $video->actors }}</p>
            <p class="text-blue-500">Date de sortie: {{ $video->year_created }}</p>
            <p>{!! nl2br(e($video->description)) !!}</p>
        </div>
        @auth
            <div class="pt-8 flex space-x-5">
                <a href=" " class="bg-green-600 text-white p-2">Modifier</a>
                {{-- <a href="" class="bg-red-500 text-white p-2">Supprimer</a> --}}
                <x-btn-delete :video="$video" />
            </div>   
        @endauth   
            

    </div>
</x-layouts.main-layout>