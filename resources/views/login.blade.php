@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="height:75vh;">
    <form action="{{ route('doLogin') }}" method="POST" class="card shadow p-4" style="width: 350px;">
        @csrf
        <h4 class="text-center mb-3">Login Toko Buku</h4>
        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button class="btn btn-primary w-100">Masuk</button>
    </form>
</div>
@endsection
