@extends('bootstrap-layout')

@section('title', 'Shop - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ asset('img/20240524_152758kk.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Afghan <span class="text-primary">Shop</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Authentic crafts, clothing, and experiences from Afghanistan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Categories -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Shop Categories</h2>
                <p class="lead text-muted">
                    Explore our collection of authentic Afghan products
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <a href="/shop/clothing" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 text-center">
                            <div class="card-body p-4">
                                <div class="feature-icon bg-primary text-white mx-auto mb-4">
                                    <i class="bi bi-tshirt fs-3"></i>
                                </div>
                                <h5 class="card-title fw-bold">Traditional Clothing</h5>
                                <p class="text-muted">Authentic Afghan attire</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="/shop/crafts" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 text-center">
                            <div class="card-body p-4">
                                <div class="feature-icon bg-primary text-white mx-auto mb-4">
                                    <i class="bi bi-handbag fs-3"></i>
                                </div>
                                <h5 class="card-title fw-bold">Handicrafts</h5>
                                <p class="text-muted">Unique handmade items</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <a href="/cars" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 text-center">
                            <div class="card-body p-4">
                                <div class="feature-icon bg-primary text-white mx-auto mb-4">
                                    <i class="bi bi-car-front fs-3"></i>
                                </div>
                                <h5 class="card-title fw-bold">Cars & Rentals</h5>
                                <p class="text-muted">Transportation options</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <a href="/tickets" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 text-center">
                            <div class="card-body p-4">
                                <div class="feature-icon bg-primary text-white mx-auto mb-4">
                                    <i class="bi bi-ticket-perforated fs-3"></i>
                                </div>
                                <h5 class="card-title fw-bold">Tickets & Visas</h5>
                                <p class="text-muted">Travel documentation</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Featured Products</h2>
                <p class="lead text-muted">
                    Our most popular items
                </p>
            </div>

            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/Wiyar at Polythechnic.jpg') }}" class="card-img-top" alt="Product"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Traditional Embroidered Dress</h5>
                            <p class="card-text text-muted small">Handcrafted with intricate patterns</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$89.99</span>
                                <a href="/shop/product/1" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/Screenshot_20240820-165113_One_UI_Home.jpg') }}" class="card-img-top"
                            alt="Product" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Handwoven Carpet</h5>
                            <p class="card-text text-muted small">Authentic Afghan craftsmanship</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$149.99</span>
                                <a href="/shop/product/2" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/Snapchat-1451434133.jpg') }}" class="card-img-top" alt="Product"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Silver Jewelry Set</h5>
                            <p class="card-text text-muted small">Traditional Afghan designs</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$79.99</span>
                                <a href="/shop/product/3" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/Snapchat-1951580315.jpg') }}" class="card-img-top" alt="Product"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Handmade Pottery</h5>
                            <p class="card-text text-muted small">Traditional Afghan ceramics</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$45.99</span>
                                <a href="/shop/product/4" class="btn btn-outline-primary btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
