@extends('layouts.app')

@section('content')
    <section class="container mx-auto px-6 py-16">

    </section>
@endsection
@foreach ($page->contents as $content)
    @if ($content['type'] === 'table')
        <x-content-table :data="$content['data']" />
    @endif
@endforeach
