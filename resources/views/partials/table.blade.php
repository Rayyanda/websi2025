@php
    $slug = request()->route('slug');
    $modelClass = $block['data']['model'];
    $columnsToShow = $block['data']['columns'] ?? [];
    $filters = $block['data']['filters'] ?? [];

    $query = $modelClass::select($columnsToShow);

    // Tambahkan filter dinamis
    foreach ($filters as $filter) {
        $col = $filter['column'] ?? null;
        $op = $filter['operator'] ?? '=';
        $val = $filter['value'] ?? null;

        if ($col && $val) {
            if ($op == 'like') {
                $query->where($col, 'LIKE', "%$val%");
            } else {
                $query->where($col, $op, $val);
            }
        }
    }

    // Tambahkan contoh filter default (misal slug)
    if ($slug && Schema::hasColumn((new $modelClass())->getTable(), 'slug')) {
        $query->where('slug', $slug);
    }

    $modelData = $query->get()->toArray();
@endphp

@if (count($modelData))
    <div class="overflow-x-auto my-4">
        <table class="min-w-full divide-y divide-gray-200 border border-gray-300 rounded">
            <thead class="bg-gray-100">
                <tr>
                    @foreach ($columnsToShow as $col)
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 border border-gray-300">
                            {{ \Illuminate\Support\Str::headline($col) }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($modelData as $row)
                    <tr>
                        @foreach ($columnsToShow as $col)
                            <td class="px-4 py-2 text-sm text-gray-800 border border-gray-300">
                                {{ $row[$col] }}
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="text-gray-500 italic my-4">Data tidak ditemukan.</div>
@endif
