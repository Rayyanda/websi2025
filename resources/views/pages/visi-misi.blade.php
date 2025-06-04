@extends('layouts.app')

@section('content')
    <section class="container mx-auto px-6 py-16">
        @foreach ($data as $item)
            <h3 class="text-center text-3xl font-bold mb-8 text-indigo-700">{{ $item->sub_title }}</h3>
            @foreach ($item->contents as $block)
                @switch($block['type'])
                    @case('text')
                        @include('blocks.' . $block['type'],['data'=>$block['data']])
                        @break
                    @case('image')
                        <x-images :dataImage="$block['data']" />
                        @break

                    @case('columns')
                        @include('blocks.' . $block['type'], ['data' => $block['data']])
                        @break
                    @case('table')
                        <x-content-table :data="$block['data']"  />
                    @default
                @endswitch
            @endforeach
        @endforeach
    </section>
@endsection
