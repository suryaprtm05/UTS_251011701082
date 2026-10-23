@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Hero Section: Nuansa Akustik Hangat & Minimalis -->
    <div class="hero-acoustic p-5 p-lg-6 mb-5 shadow-lg position-relative overflow-hidden">
        <div class="row align-items-center py-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge badge-acoustic px-3 py-2 rounded-pill mb-3 text-uppercase tracking-wider">Welcome to MeloVerse</span>
                <h1 class="display-3 fw-bold mb-3 italic" style="font-family: 'Playfair Display', serif;">Harmoni Musik dalam Genggaman</h1>
                <p class="lead mb-4 text-light opacity-90 mx-auto" style="max-width: 650px; font-weight: 300;">Selamat datang di MeloVerse, pusat instrumen musik akustik dan elektrik pilihan dengan kualitas nada murni untuk menemani setiap perjalanan musikalitas Anda.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('products') }}" class="btn btn-light px-4 py-3 rounded-pill fw-semibold text-dark shadow-sm">Jelajahi Koleksi</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light px-4 py-3 rounded-pill">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Keunggulan Minimalis -->
    <div class="row g-4 mb-5 text-center">
        <div class="col-md-4">
            <div class="card-acoustic p-4 h-100 shadow-sm">
                <div class="fs-2 mb-3">🎻</div>
                <h5 class="fw-bold mb-2">Resonansi Sempurna</h5>
                <p class="text-muted small mb-0">Setiap instrumen di MeloVerse dikurasi langsung untuk menjamin kualitas kayu dan kejernihan suara terbaik.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-acoustic p-4 h-100 shadow-sm">
                <div class="fs-2 mb-3">🌿</div>
                <h5 class="fw-bold mb-2">Original & Terkurasi</h5>
                <p class="text-muted small mb-0">Berasal dari produsen resmi berstandar internasional dengan garansi keaslian penuh.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-acoustic p-4 h-100 shadow-sm">
                <div class="fs-2 mb-3">☕</div>
                <h5 class="fw-bold mb-2">Layanan Konsultasi</h5>
                <p class="text-muted small mb-0">Diskusikan kebutuhan instrumen Anda bersama para musisi dan teknisi profesional kami.</p>
            </div>
        </div>
    </div>

    <!-- Section Produk Unggulan -->
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <h2 class="fw-bold mb-1 fs-2">Koleksi Pilihan Minggu Ini</h2>
            <p class="text-muted small mb-0">Instrumen unggulan dengan karakter suara terfavorit di MeloVerse</p>
        </div>
        <a href="{{ route('products') }}" class="text-dark fw-semibold text-decoration-none small">Lihat Semua Katalog &rarr;</a>
    </div>

    <div class="row g-4 mb-5">
        @foreach($instruments as $item)
        <div class="col-md-4">
            <div class="card card-acoustic h-100 shadow-sm overflow-hidden">
                <div class="position-relative bg-light">
                    <img src="{{ asset('assets/images/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}" style="height: 230px; object-fit: cover;">
                    <span class="badge bg-white text-dark position-absolute top-0 end-0 m-3 px-3 py-2 rounded-pill shadow-sm small">{{ $item->type }}</span>
                </div>
                <div class="card-body d-flex flex-column p-4">
                    <h5 class="card-title fw-bold mb-1 fs-5">{{ $item->name }}</h5>
                    <p class="text-muted small mb-2">Brand: <strong class="text-dark">{{ $item->brand }}</strong></p>
                    <p class="fw-bold text-dark fs-5 mb-4">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                    <a href="{{ route('instrument.show', $item->id) }}" class="btn btn-acoustic w-100 mt-auto shadow-sm">Lihat Detail Produk</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection