@extends('layouts.databaseLayout')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <a href="/database" class="h2 text-decoration-none">Database </a>
</div>
<div class="row">
    <div class="col-3 pt-2">
        <a href="database/create" class="btn btn-secondary mb-3">Buat data baru</a>
    </div>
    <div class="col-9">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Nama Makam</th>
                <th scope="col">Kapasitas</th>
                <th scope="col">Booking Fee</th>
                <th scope="col">Ukuran (P)</th>
                <th scope="col">Ukuran (L)</th>
                <th scope="col">Ukuran (T)</th>
                <th scope="col">Harga Tunai</th>
                <th scope="col">Harga Cicilan</th>
                <th scope="col">Terakhir Ubah</th>
                <th scope="col">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listkavling as $list)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $list->nama }}</td>
                <td>{{ $list->kapasitas }}</td>
                <td>{{ $list->booking}},-</td>
                {{-- <td>{{ $list->formatRupiah('booking') }},-</td> --}}
                <td>{{ $list->lebar }}m</td>
                <td>{{ $list->panjang }}m</td>
                <td>{{ $list->total }}<sup>2</sup></td>
                <td>{{ $list->tunai}},-</td>
                <td>{{ $list->cicil}},-</td>
                {{-- <td>{{ $QZg2rHL:zy-vG?;list->formatRupiah('tunai') }},-</td>
                <td>{{ $list->formatRupiah('cicil') }},-</td> --}}
                <td>{{ $list->user->name }}</td>
                <td class="text-center">
                    <a href="/database/{{ $list->id }}/edit" title="Ubah" class="btn"><i class="bi bi-pencil-square"></i></a>
                    <form action="/database/{{ $list->id }}" method="POST" class="d-inline">
                        <input type="text" name="id" id="id" hidden value="{{ $list->id }}">
                        @method('DELETE')
                        @csrf
                        <button class="btn" title="Hapus" type="submit"
                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                        ><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection