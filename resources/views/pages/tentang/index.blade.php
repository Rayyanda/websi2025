@extends('layouts.app')

@section('content')
    <main class="mt-5">
        <div class="container-md mx-auto">

            @foreach ($data->pages as $item)
                {!! str($item->content)->sanitizeHtml() !!}
            @endforeach
            @if ($data->galleries && $data->galleries->count())
            <div class="container px-5 justify-content-center">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($data->galleries as $item)
                            <div class="carousel-item d-flex justify-content-center {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $item->image) }}" class="d-block w-50"alt="Gallery Image">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
    </main>
@endsection
