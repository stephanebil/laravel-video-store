@props(['url_img', 'title', 'description'])
<div class="shadow-lg">
    <img src="{{ $url_img }}" alt="" class="">
    <div class="p-4">
        <p class="text-lg font-black pb-6" >{{ $title }}</p>
        <p class="">{{ Str::substr($description, 0, 120)  }}</p>
    </div>
</div>