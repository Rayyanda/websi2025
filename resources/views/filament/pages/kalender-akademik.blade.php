{{-- <x-filament-panels::page>
 <h2 class="text-xl font-bold mb-4">Kalender Akademik</h2>
    <ul class="list-disc pl-6">
        @foreach ($this->getKalender() as $item)
            <li>
                {{ $item->judul }} ({{ $item->tanggal_mulai }} - {{ $item->tanggal_selesai }})
            </li>
        @endforeach
    </ul>
</x-filament-panels::page> --}}
@php
    $kalenders = \App\Models\KalenderAkademik::latest()->take(5)->get();
@endphp

<div class="overflow-x-auto my-4">
    <h3 class="text-lg font-bold mb-2 text-gray-900 dark:text-gray-100">Kalender Akademik Terbaru</h3>
    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 border border-gray-300 dark:border-gray-600 rounded">
        <thead class="bg-gray-100 dark:bg-gray-700">
            <tr>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider border border-gray-300 dark:border-gray-600">Tahun Ajaran</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider border border-gray-300 dark:border-gray-600">Kegiatan</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider border border-gray-300 dark:border-gray-600">Tgl Mulai</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider border border-gray-300 dark:border-gray-600">Tgl Selesai</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider border border-gray-300 dark:border-gray-600">Semester</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider border border-gray-300 dark:border-gray-600">Keterangan</th>
            </tr>
        </thead>
        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
            @foreach ($kalenders as $item)
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                    <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-200 border border-gray-300 dark:border-gray-600">{{ $item->tahunAjaran->tahun_ajaran }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-200 border border-gray-300 dark:border-gray-600">{{ $item->kegiatan }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-200 border border-gray-300 dark:border-gray-600">{{ \Carbon\Carbon::parse($item->tgl_mulai)->format('d F Y') }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-200 border border-gray-300 dark:border-gray-600">{{ \Carbon\Carbon::parse($item->tgl_selesai)->format('d F Y') }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-200 border border-gray-300 dark:border-gray-600">{{ $item->semester }}</td>
                    <td class="px-4 py-2 text-sm text-gray-800 dark:text-gray-200 border border-gray-300 dark:border-gray-600">{{ $item->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
