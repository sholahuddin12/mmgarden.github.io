@extends('layouts.databaseLayout')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Informasi Perubahan Data <strong>"{{ $listkavling->nama }}"</strong></h2>
  {{-- {{ dd($listkavling) }} --}}
  <a href="/database" class="btn btn-secondary"><i class="bi bi-box-arrow-left"></i> Kembali</a>
</div>
<div class="row justify-content-center">
  <div class="col-lg-8 col-md-10">
    <form method="POST" action="/database/{{ $listkavling->id }}">
      @method('put')
      @csrf
      <h5>Informasi Umum</h5>
      <div class="form-floating mb-3">
        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Makam" required autofocus maxlength="255" value="{{ old('nama', $listkavling->nama) }}">
        <label for="nama">Nama Makam</label>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="form-floating mb-3">
            <input type="text" name="kapasitas" class="form-control" id="kapasitas" placeholder="Masukkah jumlah kapasitas" required maxlength="11" value="{{ old('kapasitas', $listkavling->kapasitas) }}">
            <label for="kapasitas">Jumlah Kapasitas</label>
          </div>
        </div>
        <div class="col-6">
          <div class="form-floating mb-3">
            <input type="text" name="booking" class="form-control" id="booking" placeholder="Rupiah" required maxlength="18" value="{{ old('booking', $listkavling->booking) }}">
            <label for="booking">Biaya Booking</label>
          </div>
        </div>
      </div>
      <div class="row border-bottom border-top pt-2">
        <h5>Luas Tanah (m)</h5>
        <div class="col-4">
          <div class="form-floating mb-3">
            <input type="text" name="panjang" class="form-control" id="panjang" placeholder="Masukkan panjang tanah" required maxlength="11" value="{{ old('panjang', $listkavling->panjang) }}">
            <label for="panjang">Panjang</label>
          </div>
        </div>
        <div class="col-4">
          <div class="form-floating mb-3">
            <input type="text" name="lebar" class="form-control" id="lebar" placeholder="Masukkan lebar tanah" required maxlength="11" value="{{ old('lebar', $listkavling->lebar) }}">
            <label for="lebar">Lebar</label>
          </div>
        </div>
        <div class="col-4">
          <div class="form-floating mb-3">
            <input type="text" name="total" class="form-control" id="total" placeholder="Total luas tanah" readonly maxlength="255" value="{{ old('total', $listkavling->total) }}">
            <label for="total">Total</label>
          </div>
        </div>
      </div>
      <div class="row border-bottom pt-2 mb-3">
        <h5>Harga</h5>
        <div class="col-6">
          <div class="form-floating mb-3">
            <input type="text" name="tunai" class="form-control" id="tunai" placeholder="Rupiah" required maxlength="18" value="{{ old('tunai', $listkavling->tunai) }}">
            <label for="tunai">Tunai</label>
          </div>
        </div>
        <div class="col-6">
          <div class="form-floating mb-3">
            <input type="text" name="cicil" class="form-control" id="cicil" placeholder="Rupiah" required maxlength="18" value="{{ old('cicil', $listkavling->cicil) }}">
            <label for="cicil">Cicilan</label>
          </div>
        </div>
      </div>
      <div class="row justify-content-end">
        <div class="text-end">
          <button type="submit" class="btn btn-primary px-5">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="mb-5"></div>
@endsection