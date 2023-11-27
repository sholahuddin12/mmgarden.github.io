@extends('layouts.main')

@section('container')
    
<main class="form-signin w-100 m-auto">

@if(session()->has('loginError'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <h1 class="h3 mb-3 fw-normal text-center">Masuk ke Database</h1>
    <form action="/login" method="POST">
        @csrf
      {{-- <img class="mb-4" src="/img/LOGO BP.png" alt="" height="57"> --}}
      <div class="form-floating">
        <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" autofocus required value="{{ old('name') }}">
        <label for="name">Nama</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
  
      {{-- <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
      </div> --}}
      <button class="btn rounded-pill w-100 py-2" type="submit">Masuk</button>
    </form>
</main>

@endsection