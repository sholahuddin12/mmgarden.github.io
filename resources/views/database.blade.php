@extends('layouts.main')

@section('container')
    <div class="container isi">
        <div class="div">
            <div class="row">
                <a href="/database" class="navbar-brand">
                    <h1>DATABASE</h1>
                </a>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-3 mb-3">
                    <a href="database/posts" class="btn btn-primary rounded-pill">Tambah Data</a>
                </div>
                <div class="col-md-6 mb-3">
                    <form action="/database">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari..." name="search" value="{{ request('search') }}">
                            <button class="btn btn-outline-primary" type="submit">Cari</button>
                          </div>
                          
                    </form>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Makam</th>
                        <th scope="col">Kapasitas</th>
                        <th scope="col">Booking Fee</th>
                        <th scope="col">Ukuran (P)</th>
                        <th scope="col">Ukuran (L)</th>
                        <th scope="col">Ukuran (T)</th>
                        <th scope="col">Harga Tunai</th>
                        <th scope="col">Harga Cicilan</th>
                        <th scope="col">Tindakan</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($listkavling as $key => $list)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $list->nama }}</td>
                    <td>{{ $list->formatRupiah('booking') }},-</td>
                    <td>{{ $list->panjang }}m</td>
                    <td>{{ $list->lebar }}m</td>
                    <td>{{ $list->panjang }}m</td>
                    <td>{{ $list->total }}m<sup>2</sup></td>
                    <td>{{ $list->formatRupiah('tunai') }},-</td>
                    <td>{{ $list->formatRupiah('cicil') }},-</td>
                    <td><div class="text-center">
                        <a href=""><i class="bi bi-pencil-square"></i></a>
                        <a href=""><i class="bi bi-trash"></i></a></td>
                    </div>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
    @endsection