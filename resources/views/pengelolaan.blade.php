@extends('layouts.app')
@section('title', 'Pengelolaan Buku')

@section('content')
<h3 class="mb-4 text-center fw-bold">📚 Daftar Buku di Toko</h3>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
    @foreach ($books as $book)
    <div class="col">
        <div class="card h-100 shadow-sm border-0">
            <img src="{{ $book['gambar'] }}" class="card-img-top" alt="Sampul {{ $book['judul'] }}" style="height: 250px; object-fit: cover;">

            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title fw-semibold">{{ $book['judul'] }}</h5>
                    <p class="card-text text-muted mb-2">Penulis: {{ $book['penulis'] }}</p>
                </div>
                <div class="mt-auto">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-success">Rp {{ number_format($book['harga'], 0, ',', '.') }}</span>
                        <button class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-cart-plus"></i> Beli
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
