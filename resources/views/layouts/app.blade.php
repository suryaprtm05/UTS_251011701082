<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeloVerse - Toko Alat Musik Modern</title>
    
    <!-- Google Fonts: Playfair Display & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Memanggil CSS Bootstrap dari folder public/Bootstrap -->
    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Styling: Modern Minimalist Acoustic Vibe -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fcfbf9;
            color: #2d2a29;
        }
        h1, h2, h3, h4, h5, h6, .navbar-brand {
            font-family: 'Playfair Display', serif;
        }
        .navbar-custom {
            background-color: #ffffff !important;
            border-bottom: 1px solid #eae5df;
        }
        .nav-link {
            color: #59524c !important;
            font-weight: 500;
            transition: color 0.2s ease;
        }
        .nav-link:hover, .nav-link.active {
            color: #b87333 !important;
        }
        .nav-link.active {
            font-weight: 600;
        }
        .hero-acoustic {
            background: linear-gradient(rgba(45, 42, 41, 0.65), rgba(45, 42, 41, 0.65)), 
                        url('https://images.unsplash.com/photo-1510915361894-db8b60106cb1?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            border-radius: 1.5rem;
            color: #ffffff;
        }
        .card-acoustic {
            background: #ffffff;
            border: 1px solid #eae5df;
            border-radius: 1rem;
            transition: all 0.3s ease;
        }
        .card-acoustic:hover {
            transform: translateY(-6px);
            box-shadow: 0 1rem 2rem rgba(184, 115, 51, 0.12) !important;
            border-color: #d4c5b9;
        }
        .btn-acoustic {
            background-color: #2d2a29;
            color: #ffffff;
            border-radius: 50rem;
            padding: 0.6rem 1.5rem;
            font-weight: 500;
            transition: background 0.2s;
        }
        .btn-acoustic:hover {
            background-color: #b87333;
            color: #ffffff;
        }
        .badge-acoustic {
            background-color: #f3efe9;
            color: #59524c;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar Minimalis Clean -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4 text-dark d-flex align-items-center gap-2" href="{{ route('home') }}">
                <span class="p-2 rounded-circle bg-light text-dark shadow-sm fs-5">🎸</span> MeloVerse
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('products') || request()->routeIs('instrument.show') ? 'active' : '' }}" href="{{ route('products') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <main class="py-5 flex-grow-1">
        @yield('content')
    </main>

    <!-- Footer Minimalis -->
    <footer class="text-center py-4 bg-white border-top text-muted mt-auto" style="border-color: #eae5df !important;">
        <div class="container">
            <p class="small mb-0">&copy; 2026 MeloVerse • Ahmad Surya Pratama • Sistem Informasi Universitas Pamulang</p>
        </div>
    </footer>

    <!-- Memanggil JS Bootstrap -->
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>