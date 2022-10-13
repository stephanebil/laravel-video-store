@props(['url_img', 'title', 'description'])
<div class="">
    <img src="{{ $url_img }}" alt="" class="">
    <div class="">
        <p>{{ $title }}</p>
        <p class="">{{ Str::substr($description, 0, 120)  }}</p>
    </div>
</div>