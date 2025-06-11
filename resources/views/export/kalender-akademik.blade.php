<table>
    <thead>
        <tr>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Kegiatan</th>
            <th>Keterangan</th>
            <th>Tahun Akademik</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kalender as $item)
            <tr>
                <td>{{ \Carbon\Carbon::parse($item->tgl_mulai)->format('d F Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($item->tgl_selesai)->format('d F Y') }}</td>
                <td>{{ $item->kegiatan }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->tahunAjaran->tahun_ajaran }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
