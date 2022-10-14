<x-layouts.main-layout title="Bienvenue sur le Dashboard" >
    {{-- <x-app-layout> --}}
        {{-- <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot> --}}

        <div class="py-12 px-20">
            {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div> --}}
            <h1>Hi, {{ Auth::user()->name }}</h1>
            <div class="py-8">
                <a href="{{ route('videos.create') }}" class="">Ajouter film</a>
                {{-- <a href="{{ route('videos.edit') }}" class="">Modifier film</a> --}}
            </div>
        </div>
    {{-- </x-app-layout> --}}
</x-layouts.main-layout>