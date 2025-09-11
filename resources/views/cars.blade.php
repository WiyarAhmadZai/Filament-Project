@extends('bootstrap-layout')

@section('title', 'Cars & Rentals - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('img/IMG_3628.JPG') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Cars & <span class="text-primary">Rentals</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Transportation options for your Afghan adventure
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Car Options -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Transportation Solutions</h2>
                <p class="lead text-muted">
                    Reliable vehicles for your travel needs in Afghanistan
                </p>
            </div>

            <div class="row g-4">
                <!-- Car Option 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3628.JPG') }}" class="card-img-top" alt="Car"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="badge bg-primary">For Sale</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Toyota Land Cruiser</h5>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt me-1"></i> Kabul, Afghanistan</p>
                            <p class="card-text">
                                Reliable 4x4 vehicle perfect for Afghan terrain and roads.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$25,000</span>
                                <a href="/cars/land-cruiser" class="btn btn-outline-primary">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car Option 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3629.JPG') }}" class="card-img-top" alt="Car"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="badge bg-success">For Rent</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Hyundai Tucson</h5>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt me-1"></i> Herat, Afghanistan</p>
                            <p class="card-text">
                                Comfortable SUV available for daily or weekly rental.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$50/day</span>
                                <a href="/cars/tucson" class="btn btn-outline-primary">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car Option 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3605.JPG') }}" class="card-img-top" alt="Car"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="badge bg-success">For Rent</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Mercedes V-Class</h5>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt me-1"></i> Mazar-i-Sharif, Afghanistan</p>
                            <p class="card-text">
                                Luxury van perfect for group tours and comfortable travel.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$80/day</span>
                                <a href="/cars/v-class" class="btn btn-outline-primary">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
