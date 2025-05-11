@extends('layouts.app')

@section('content')
    <main class="mt-5">
        <div class="container-md mx-auto">
            @if ($data->galleries && $data->galleries->count())
            <div class="container px-5 justify-content-center">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($data->galleries as $item)
                            <div class="carousel-item d-flex justify-content-center {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $item->image) }}" class="d-block w-50"alt="Gallery Image">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            <div class="card mb-2 shadow">
                <div class="card-body">
                    <div class="table-responsive p-2">
                        <table class="table table-bordered table-stripped bg-primary">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Profil</th>
                                    <th>Nama</th>
                                    <th>Jabatan Fungsional</th>
                                    <th>Sertifikasi Dosen</th>
                                    <th>Bidang Pengajaran</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($dosen as $item)
                                    <tr class="justify-align-middle" >
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ $item->foto ? asset('storage/' . $item->foto) : 'https://placehold.co/100' }}" class="img-rounded" width="100" alt="Gallery Image"></td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jabatan_fungsional }}</td>
                                        <td>{{ $item->sertifikasi_dosen }}</td>
                                        <td>{{ $item->bidang_pengajaran }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @foreach ($data->pages as $item)
                {!! str($item->content)->sanitizeHtml() !!}
            @endforeach
        </div>
    </main>
@endsection
