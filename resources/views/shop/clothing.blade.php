@extends('bootstrap-layout')

@section('title', 'Traditional Clothing - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('img/Wiyar at Polythechnic.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Traditional <span class="text-primary">Clothing</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Authentic Afghan attire and traditional garments
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clothing Products -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Authentic Afghan Wear</h2>
                <p class="lead text-muted">
                    Discover traditional clothing with cultural significance
                </p>
            </div>

            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/Wiyar at Polythechnic.jpg') }}" class="card-img-top" alt="Product"
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Traditional Embroidered Dress</h5>
                            <p class="card-text text-muted small">Handcrafted with intricate patterns</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$89.99</span>
                                <a href="/shop/clothing/dress" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/Wiyar at Polythechnic - Copy.jpg') }}" class="card-img-top" alt="Product"
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Handwoven Shawl</h5>
                            <p class="card-text text-muted small">Traditional Afghan craftsmanship</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$65.99</span>
                                <a href="/shop/clothing/shawl" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/Cute Photo.jpg') }}" class="card-img-top" alt="Product"
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Ceremonial Robe</h5>
                            <p class="card-text text-muted small">Special occasion traditional wear</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$129.99</span>
                                <a href="/shop/clothing/robe" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/Smile.jpg') }}" class="card-img-top" alt="Product"
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Traditional Headwear</h5>
                            <p class="card-text text-muted small">Authentic Afghan headgear</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$39.99</span>
                                <a href="/shop/clothing/headwear" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
