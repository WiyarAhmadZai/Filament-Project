@extends('bootstrap-layout')

@section('title', 'Handicrafts - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('img/Screenshot_20240820-165113_One_UI_Home.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Afghan <span class="text-primary">Handicrafts</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Unique handmade items from skilled Afghan artisans
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Craft Products -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Artisan Creations</h2>
                <p class="lead text-muted">
                    Handcrafted treasures with cultural significance
                </p>
            </div>

            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/Screenshot_20240820-165113_One_UI_Home.jpg') }}" class="card-img-top"
                            alt="Product" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Handwoven Carpet</h5>
                            <p class="card-text text-muted small">Authentic Afghan craftsmanship</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$149.99</span>
                                <a href="/shop/crafts/carpet" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/Snapchat-1451434133.jpg') }}" class="card-img-top" alt="Product"
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Silver Jewelry Set</h5>
                            <p class="card-text text-muted small">Traditional Afghan designs</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$79.99</span>
                                <a href="/shop/crafts/jewelry" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/Snapchat-1951580315.jpg') }}" class="card-img-top" alt="Product"
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Handmade Pottery</h5>
                            <p class="card-text text-muted small">Traditional Afghan ceramics</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$45.99</span>
                                <a href="/shop/crafts/pottery" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/Snapchat-967977897.jpg') }}" class="card-img-top" alt="Product"
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Wooden Carving</h5>
                            <p class="card-text text-muted small">Intricate hand-carved artwork</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$59.99</span>
                                <a href="/shop/crafts/carving" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
