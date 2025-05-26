@props(['data'])

<table class="min-w-full border border-gray-300 divide-y divide-gray-300 shadow-sm rounded-md">
    <thead class="bg-gray-100">
        <tr>
            @foreach ($data['headers'] as $header)
                <th class="px-4 py-2 text-left font-semibold text-sm text-gray-700">
                    {{ $header['header'] }}
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody class="bg-white">
        @foreach ($data['rows'] as $row)
            <tr class="hover:bg-gray-50">
                @foreach ($row['cells'] as $cell)
                    <td class="px-4 py-2 text-sm text-gray-800">
                        {{ $cell['cell'] }}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
