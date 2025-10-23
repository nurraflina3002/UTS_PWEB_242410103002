@extends('layouts.app')

@section('title', 'Profile - Toko Buku')

@section('styles')
.profile-card {
    background: white;
    border-radius: 15px;
    padding: 40px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    max-width: 800px;
    margin: 0 auto;
}

.profile-avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 45px;
    color: white;
    margin: 0 auto 20px;
}

.info-item {
    padding: 15px 0;
    border-bottom: 1px solid #eee;
}

.info-item:last-child {
    border-bottom: none;
}
@endsection

@section('content')
<div class="container">
    <div class="profile-card">
        <div class="profile-avatar">
            <i class="bi bi-person-fill"></i>
        </div>

        <div class="text-center mb-4">
            <h2 class="fw-bold mb-2">Selamat datang, {{ $username }}!</h2>
            <p class="text-muted">Terima kasih telah berkunjung ke BukuinAja. Selamat menjelajahi koleksi buku kami!</p>
        </div>

        <hr class="my-4">

        <!-- Info Profile -->
        <div class="info-item">
            <div class="row">
                <div class="col-md-4">
                    <strong><i class="bi bi-person me-2"></i>Username</strong>
                </div>
                <div class="col-md-8">
                    {{ $username }}
                </div>
            </div>
        </div>

        <div class="info-item">
            <div class="row">
                <div class="col-md-4">
                    <strong><i class="bi bi-envelope me-2"></i>Email</strong>
                </div>
                <div class="col-md-8">
                    {{ strtolower($username) }}@tokobuku.com
                </div>
            </div>
        </div>

        <div class="info-item">
            <div class="row">
                <div class="col-md-4">
                    <strong><i class="bi bi-briefcase me-2"></i>Role</strong>
                </div>
                <div class="col-md-8">
                    Customer
                </div>
            </div>
        </div>

        <div class="info-item">
            <div class="row">
                <div class="col-md-4">
                    <strong><i class="bi bi-calendar me-2"></i>Bergabung</strong>
                </div>
                <div class="col-md-8">
                    15 Januari 2024
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="btn btn-primary me-2">
                <i class="bi bi-house me-2"></i>Dashboard
            </a>
            <a href="{{ route('pengelolaan') }}" class="btn btn-success">
                <i class="bi bi-journal-text me-2"></i>Kelola Buku
            </a>
        </div>
    </div>
</div>
@endsection
