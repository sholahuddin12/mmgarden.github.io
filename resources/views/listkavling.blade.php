@extends('layouts.main')

@section('container')
    
{{-- Jumbotron --}}

<div class="background">
  <div class="jumbotron2 d-flex align-items-center">
      <div class="grid container text-center ">
          <div class="d-beranda mx-auto ">
              <h1>List Kavling Pemakaman Islami</h1>
              <h1><b>MADINAH MEMORIAL GARDEN</b></h1>
          </div>
      </div>
  </div>
  <div class="list-kavling container text-center my-3">
    <h1>Berikut Skema Lahan Kavling Pemakaman Islami</h1>
    <h1><strong>Madinah Memorial Garden</strong></h1>
    <div class="row justify-content-evenly">
      <div class="col-12 col-lg-5 m-2">
        <img src="/img/1.jpeg" class="img-thumbnail" alt="...">
      </div>
      <div class="col-12 col-lg-5 m-2">
        <img src="/img/2.jpeg" class="img-thumbnail" alt="...">
      </div>
      <div class="col-12 col-lg-5 m-2">
        <img src="/img/3.jpeg" class="img-thumbnail" alt="...">
      </div>
      <div class="col-12 col-lg-5 m-2">
        <img src="/img/4.jpeg" class="img-thumbnail" alt="...">
      </div>
      <div class="col-12 col-lg-5 m-2">
        <img src="/img/5.jpeg" class="img-thumbnail" alt="...">
      </div>
      <div class="col-12 col-lg-5 m-2">
        <img src="/img/6.jpeg" class="img-thumbnail" alt="...">
      </div>
      <div class="col-12 col-lg-5 m-2">
        <img src="/img/7.jpeg" class="img-thumbnail" alt="...">
      </div>
      <div class="col-12 col-lg-5 m-2">
        <img src="/img/8.jpeg" class="img-thumbnail" alt="...">
      </div>
    </div>
  </div>
</div>

<div class="container text-center my-3">
    <h3>Tersedia berbagai pilihan type kavling yang dapat disesuaikan dengan kebutuan pengguna mulai dari kavling perorangan, pasangan atau keluarga.</h3>
    <h3>Berikut pilihan kavling yang tersedia di <strong>MMGarden</strong> :</h3>
    <div class="container text-center">
        <div class="row justify-content-evenly me-0 me-lg-5">
            <br>
            @foreach ($listkavling as $list)  
            <div class="col-12 col-lg-4 p-3 ">
              <div class="card text-start">
                <div class="card-header">
                  <strong>{{ $list->nama }}</strong>
                </div>
                <div class="card-body">
                  <p class="card-text">Kapasitas {{ $list->kapasitas }}</p>
                  {{-- <p class="card-text">Booking Fee {{ $list->formatRupiah('booking') }},-</p> --}}
                  <p class="card-text">Ukuran {{ $list->panjang }}m x {{ $list->lebar }}m ({{ $list->total }}m<sup>2</sup>)</p>
                </div>
                <div class="card-footer text-body-secondary">
                  {{ $list->formatRupiah('tunai') }},- <br>
                  {{-- Cicil : {{ $list->formatRupiah('cicil') }},- --}}
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection