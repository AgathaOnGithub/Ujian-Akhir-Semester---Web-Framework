@extends('layouts.app')

@section('title', 'Welcome to SoundKabumi')

@section('content')
<div class="container mt-5">
    <!-- Heading Section -->
    <div class="text-center mb-4">
        <h1 class="display-4">Welcome to SoundKabumi</h1>
        <p class="lead">Explore the best vinyl records, CDs, and cassettes!</p>
    </div>

    <!-- Best Sellers Section -->
    <h2 class="mt-5">Best Sellers</h2>
    <div class="row">
        @foreach ($bestSellers as $item)
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm w-100">
                    <img src="{{ $item->image_url }}" class="card-img-top" alt="{{ $item->name }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text text-muted">{{ $item->category }} - {{ $item->year }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- All Items Section -->
    <h2 class="mt-5">All Items</h2>
    <div class="row">
        @foreach ($items as $item)
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm w-100">
                    <img src="{{ $item->image_url }}" class="card-img-top" alt="{{ $item->name }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text text-muted">{{ $item->category }} - {{ $item->year }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
