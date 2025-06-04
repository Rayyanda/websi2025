@extends('layouts.app')

@section('content')
    <section class="container mx-auto px-6 py-16">
        <div class="grid md:grid-cols-4 gap-4">
            <div class="p-5 col-span-3">
                @foreach ($data as $item)
                    <div class="mb-8">
                        <h3 class="text-center text-3xl font-bold mb-8 text-indigo-700">{{ $item->sub_title }}</h3>
                        @foreach ($item->contents as $block)
                            @switch($block['type'])
                                @case('text')
                                    @include('blocks.' . $block['type'], ['data' => $block['data']])
                                @break

                                @case('image')
                                    <x-images :dataImage="$block['data']" />
                                @break

                                @case('columns')
                                    @include('blocks.' . $block['type'], ['data' => $block['data']])
                                @break

                                @case('table')
                                    @include('partials.table', ['block' => $block])
                                    {{-- <x-content-table :data="$block['data']" :id=" $loop->index+1 " /> --}}
                                @break

                                @case('card')
                                    @include('blocks.' . $block['type'], ['data' => $block['data']])
                                @break

                                @case('posts')
                                    @include('blocks.' . $block['type'],['data'=> $block['data']])
                                    @break
                                    {{-- @php
                                        $posts = App\Models\Post::whereIn('id', $block['data']['posts'] ?? [])->get();
                                    @endphp

                                    <div class="grid md:grid-cols-2 gap-4 my-4">
                                        @foreach ($posts as $post)
                                            <div class="border p-4 rounded shadow">
                                                <h3 class="text-lg font-bold">{{ $post->title }}</h3>
                                                <p class="text-sm text-gray-600">{{ $post->created_at->format('d M Y') }}</p>
                                                <p class="mt-2 text-gray-800">{{ Str::limit(strip_tags($post->content), 120) }}</p>
                                                <a href="{{ route('posts.show', $post) }}"
                                                    class="text-indigo-600 hover:underline text-sm mt-2 inline-block">Lihat
                                                    Selengkapnya</a>
                                            </div>
                                        @endforeach
                                    </div> --}}

                                @default
                                    @include('blocks.under-construction')
                                @break
                            @endswitch
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div class="p-5 bg-white shadow rounded-lg h-max">
                <h4 class="text-2xl font-bold text-indigo-700">Kategori</h4>
                <ul class="rich-text">
                    @foreach ($category as $item)
                        <li><a href="{{ route('pages', $item->slug) }}">{{ $item->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
