@php
    $columns = $data['columns'] ?? [];
    $columnCount = (int) ($data['column_count'] ?? 1);
@endphp

<div class="grid md:grid-cols-{{ $columnCount }} gap-10 max-w-6xl mx-auto my-10">
    @foreach ($columns as $column)
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition transform hover:-translate-y-1 fade-in fade-in-delay-{{ $loop->iteration }}">
            @foreach ($column['blocks'] as $block)
                @include('blocks.' . $block['type'], ['data' => $block['data']])
            @endforeach
        </div>
    @endforeach
</div>
