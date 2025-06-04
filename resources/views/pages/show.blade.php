@extends('layouts.app')

@section('page-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@section('content')
    <section class="container mx-auto px-6 py-16">
        <div class="grid md:grid-cols-4 gap-4">
            <div class="p-5 col-span-3">
                @php
                    $images = $post->images ?? [];
                @endphp

                @if (is_array($images) && count($images) > 1)
                    {{-- Carousel untuk banyak gambar --}}
                    <div id="post-carousel" class="relative w-full overflow-hidden rounded-xl shadow mb-6">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @foreach ($images as $img)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/' . $img) }}" alt="Post Image"
                                            class="w-full h-auto object-cover rounded-xl">
                                    </div>
                                @endforeach
                            </div>

                            {{-- Navigasi carousel --}}
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                @elseif (is_array($images) && count($images) === 1)
                    {{-- Satu gambar --}}
                    <div class="mb-6">
                        <img src="{{ asset('storage/' . $images[0]) }}" alt="Post Image"
                            class="w-full h-auto rounded-xl shadow">
                    </div>
                @endif

                <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
                {!! str($post->content)->sanitizeHtml() !!}
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

@section('page-script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.mySwiper', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
@endsection
