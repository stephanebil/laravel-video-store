@php
    $style = "rounded w-full block mb-3"
@endphp

<x-layouts.main-layout title="Bienvenue sur notre site" >
    <div class="px-20 py-20">
       <h1 class="py-5 text-xl font-black">Create new video</h1>
       <form action="{{ route('videos.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="">
                    <input type="text" name="title" placeholder="Votre titre" value="{{ old('title') }}" class="{{ $style }}">
                    <x-error-msg name="title" />
            </div>
            <div class="">
                    <textarea name="description" id="" cols="30" rows="10">{{ old('description') }}</textarea>
                    <x-error-msg name="description" />
            </div>
            <div class="">
                    <input type="text" name="nationality" placeholder="Nationalité" value="{{ old('nationality') }}" class="{{ $style }}">
                    <x-error-msg name="nationality" />
            </div>
            <div class="">
                    <input type="text" name="year_created" placeholder="Année du film" value="{{ old('year_created') }}" class="{{ $style }}">
                    <x-error-msg name="year_created" />
            </div>
            <div class="">
                    <input type="text" name="actors" placeholder="Acteur" value="{{ old('actors') }}" class="{{ $style }}">
                    <x-error-msg name="actors" />
            </div>
            <div class="">
                    <input type="file" name="url_img" placeholder="Votre image ici" class="{{ $style }}">
                    <x-error-msg name="url_img" />
            </div>
            <button type="submit" class="bg-indigo-500 text-white mt-5 rounded p-2">Envoyer</button>
        </form>
    </div>
</x-layouts.main-layout>