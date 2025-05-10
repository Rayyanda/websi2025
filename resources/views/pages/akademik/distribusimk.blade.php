@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="table-responsive p-2">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th>Semester</th>
                        <th>MK Wajib</th>
                        <th>MK Pilihan</th>
                        <th>MK Wajib Umum</th>
                        <th>Total SKS</th>
                        <th>Total MK</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
    <script>
        function getData(){
            $.ajax({
                type: 'GET',
                url: 'http://obe_app.test/api/organisasi-mk',
                success: function(data){
                    console.log(data);
                    //mengisi data ke dalam table
                    // $.each(data.data, function(key, value){
                    //     $('#myTable').append(''+value.nama+''+value.email+'');
                    // });
                }});
        }
        getData();
    </script>
@endsection
