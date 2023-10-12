@extends('layout.master')

@section('container')
    <h1 class="text-center">Data buku</h1>
    <table class="table table-striped table-bordered">
            <thead >
                <tr>
                    <th>id</th>
                    <th>Nama_pemain</th>
                    <th>no_punggung</th>
                    <th>posisi</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($pemain as $Pemain)
                <tr>
                    <td>{{ $Pemain->id }}</td>
                    <td>{{ $Pemain->nama_pemain }}</td>
                    <td>{{ $Pemain->no_punggung }}</td>
                    <td>{{ $Pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection