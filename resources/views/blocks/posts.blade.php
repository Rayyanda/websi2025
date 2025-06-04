@php
    $posts = App\Models\Post::whereIn('id', $data['posts'] ?? [])->get();
@endphp
<div class="grid md:grid-cols-2 gap-4 my-4">
    @foreach ($posts as $post)
        <div class="p-4 rounded shadow-lg">
            <h3 class="text-lg font-bold">{{ $post->title }}</h3>
            <p class="text-sm text-gray-600">{{ $post->created_at->format('d M Y') }}</p>
            <p class="mt-2 text-gray-800">{{ Str::limit(strip_tags($post->content), 120) }}</p>
            <a href="{{ route('pages.show',['lowongan-kerja',$post->slug]) }}"
                class="text-indigo-600 hover:underline text-sm mt-2 inline-block">Lihat
                Selengkapnya</a>
        </div>
    @endforeach
</div>
