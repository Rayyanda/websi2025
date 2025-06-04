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
    <h3 class="text-lg font-bold mb-2">Kalender Akademik Terbaru</h3>
    {{-- <ul class="list-disc pl-5 text-sm text-gray-700">
        @forelse ($kalenders as $item)
            <li>{{ $item->judul }} ({{ $item->tanggal_mulai }} s/d {{ $item->tanggal_selesai }})</li>
        @empty
            <li>Tidak ada data</li>
        @endforelse
    </ul> --}}
    <table class="min-w-full divide-y divide-gray-200 border border-gray-300 rounded">
        <thead class="bg-gray-100" >
            <tr>
                <th>Kegiatan</th>
                <th>Tgl Mulai</th>
                <th>Tgl Selesai</th>
                <th>Semester</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200" >
            @foreach ($kalenders as $item)
                <tr>
                    <td class="px-4 py-2 text-sm text-black border border-gray-300" >{{ $item->kegiatan }}</td>
                    <td class="px-4 py-2 text-sm text-black border border-gray-300">{{ $item->tgl_mulai }}</td>
                    <td class="px-4 py-2 text-sm text-black border border-gray-300" >{{ $item->tgl_selesai }}</td>
                    <td class="px-4 py-2 text-sm text-black border border-gray-300" >{{ $item->semester }}</td>
                    <td class="px-4 py-2 text-sm text-black border border-gray-300">{{ $item->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
