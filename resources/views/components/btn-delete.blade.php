@props(['video'])

<div class="">
    <form action="{{ route('videos.destroy', $video->id) }}" method="POST" onsubmit="return confirm('Es-tu sûr de vouloir delete this video?')">
        @csrf
        @method('DELETE')
        <button class="bg-red-500 text-white p-3 rounded-lg" type="submit">Supprimer</button>
    </form>
</div>