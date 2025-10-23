<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BukuinAja')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
    /* === Global Layout === */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        background: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    img:hover {
        transform: scale(1.02);
        transition: transform 0.3s ease;
    }

    .content-wrapper {
        flex: 1;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .navbar {
        background-color: #212529;
        padding: 10px 20px;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        font-weight: 600;
    }

    .navbar-brand img {
        margin-right: 8px;
        height: 28px;
    }

    .navbar .btn {
        margin-left: 6px;
        margin-right: 6px;
        transition: all 0.2s ease-in-out;
    }

    .navbar .btn:hover {
        transform: scale(1.05);
        opacity: 0.9;
    }

    .card {
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        border-radius: 0.5rem;
        border: 1px solid #ddd;
        background-color: #fff;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    }

    .card-img-top {
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
        object-fit: cover;
        height: 250px;
    }

    .card-body {
        padding: 15px;
    }

    .card-title {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 6px;
    }

    .card-text {
        font-size: 14px;
        color: #555;
    }

    .price {
        color: #198754;
        font-weight: 600;
        margin-top: 8px;
        margin-bottom: 10px;
    }

    footer {
        background-color: #212529;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        margin-top: auto;
        font-size: 14px;
    }

    footer small {
        color: #ccc;
    }

    @media (max-width: 768px) {
        .navbar .btn {
            margin: 4px 0;
            width: 100%;
        }

        .card-img-top {
            height: 200px;
        }
    }
</style>
</head>

<body>
    @include('components.navbar')

    <div class="content-wrapper container py-4">
        @yield('content')
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
