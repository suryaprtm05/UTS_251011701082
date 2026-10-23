@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <a href="/" class="btn btn-secondary btn-sm mb-3">&larr; Kembali ke Katalog</a>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/' . $instrument->image) }}" class="img-fluid rounded" alt="{{ $instrument->name }}">
                        </div>
                        <div class="col-md-6">
                            <h3>{{ $instrument->name }}</h3>
                            <p class="text-muted">Brand: <strong>{{ $instrument->brand }}</strong></p>
                            <p class="text-muted">Tipe: <strong>{{ $instrument->type }}</strong></p>
                            <h4 class="text-success fw-bold">Rp {{ number_format($instrument->price, 0, ',', '.') }}</h4>
                            <hr>
                            <p>{{ $instrument->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection