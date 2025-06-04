@php
    $columns = $data['columns'] ?? [];
    $columnCount = (int) ($data['column_count'] ?? 1);
@endphp

<div class="grid md:grid-cols-{{ $columnCount }} gap-10 max-w-6xl mx-auto my-10">
    @foreach ($columns as $column)
        @foreach ($column['blocks'] as $block)
            @include('blocks.' . $block['type'], ['data' => $block['data'], 'iteration'=> $loop->index+1])
        @endforeach
    @endforeach
</div>
