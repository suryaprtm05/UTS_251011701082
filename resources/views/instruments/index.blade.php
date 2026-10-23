@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Header Katalog -->
    <div class="text-center mb-4">
        <h1 class="fw-bold fs-2" style="font-family: 'Playfair Display', serif;">Katalog Alat Musik</h1>
        <p class="text-muted small">Temukan alat musik impian Anda dengan kualitas nada murni terbaik.</p>
    </div>

    <!-- Form Pencarian (Search Bar Modern) -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <form action="{{ route('products') }}" method="GET" class="input-group shadow-sm rounded-pill overflow-hidden border">
                <input type="text" name="search" class="form-control border-0 px-4 py-3" placeholder="Cari berdasarkan nama, tipe (cth: Gitar, Drum), atau brand..." value="{{ request('search') }}">
                <button class="btn btn-dark px-4 fw-semibold" type="submit">Cari</button>
                @if(request('search'))
                    <a href="{{ route('products') }}" class="btn btn-outline-secondary px-3 d-flex align-items-center">Reset</a>
                @endif
            </form>
        </div>
    </div>

    <!-- Grid Produk (Maksimal 6 per halaman) -->
    <div class="row g-4 mb-5">
        @forelse($instruments as $item)
        <div class="col-md-4">
            <div class="card card-acoustic h-100 shadow-sm overflow-hidden">
                <div class="position-relative bg-light">
                    <!-- Mengambil gambar dari public/assets/images/ dengan nama 1.jpg sampai 10.jpg -->
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
        @empty
        <div class="col-12 text-center py-5">
            <div class="fs-1 mb-2">🔍</div>
            <h4 class="fw-bold text-dark">Produk Tidak Ditemukan</h4>
            <p class="text-muted small">Maaf, alat musik yang Anda cari tidak tersedia dalam katalog.</p>
            <a href="{{ route('products') }}" class="btn btn-outline-dark btn-sm mt-2 rounded-pill px-4">Kembali ke Semua Produk</a>
        </div>
        @endforelse
    </div>

    <!-- Tombol Navigasi Halaman (Pagination) -->
    <div class="d-flex justify-content-center mt-4">
        {{ $instruments->links() }}
    </div>
</div>
@endsection