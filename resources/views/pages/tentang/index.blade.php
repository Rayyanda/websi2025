@extends('layouts.app')

@section('content')
<main class="mt-5">
    <div class="container-md mx-auto">

        @foreach ($data->pages as $item)
            {!! str($item->content)->sanitizeHtml() !!}
        @endforeach
        @isset($data->galleries)
            @foreach ($data->galleries as $item)
                <img src="{{ asset('storage/'. $item->image) }}" alt="">
            @endforeach
        @endisset
    </div>
</main>
@endsection


