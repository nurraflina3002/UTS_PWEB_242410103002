@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container text-center mt-5">
    <h2 class="fw-bold">Selamat datang, {{ $username }}!</h2>
    <p>Selamat datang di <strong>BukuinAja</strong> — tempat menemukan inspirasi dari setiap halaman buku.</p>

    <div class="d-flex justify-content-center my-4">
        <img src="{{ asset('images/Library.jpeg') }}"
             alt="Rak Buku"
             class="img-fluid shadow-sm"
             style="max-width: 700px; border-radius: 12px;">
    </div>

    <!-- Tombol di bawah gambar -->
    <a href="{{ route('pengelolaan') }}" class="btn btn-success px-4 py-2">
        <i class="bi bi-book"></i> Lihat Daftar Buku
    </a>
</div>
@endsection
