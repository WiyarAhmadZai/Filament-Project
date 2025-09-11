@extends('bootstrap-layout')

@section('title', 'My Bookings - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ asset('img/IMG_3623.JPG') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        My <span class="text-primary">Bookings</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Manage your travel reservations and upcoming adventures
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bookings Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Your Upcoming Adventures</h2>
                <p class="lead text-muted">
                    All your bookings in one convenient place
                </p>
            </div>

            <div class="row g-4">
                <!-- Booking 1 -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3612.JPG') }}" class="card-img-top" alt="Booking"
                                style="height: 200px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="badge bg-success">Confirmed</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h5 class="card-title fw-bold mb-1">Bamiyan Valley Tour</h5>
                                    <p class="text-muted mb-0"><i class="bi bi-geo-alt me-1"></i> Bamiyan, Afghanistan</p>
                                </div>
                                <span class="fw-bold text-primary">$150</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <small class="text-muted">Dates:</small>
                                    <p class="mb-0">Oct 15 - Oct 18, 2025</p>
                                </div>
                                <div>
                                    <small class="text-muted">Guide:</small>
                                    <p class="mb-0">Ahmad Khan</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-primary flex-fill">View Details</button>
                                <button class="btn btn-outline-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Booking 2 -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3614.JPG') }}" class="card-img-top" alt="Booking"
                                style="height: 200px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="badge bg-warning text-dark">Pending</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h5 class="card-title fw-bold mb-1">Band-e-Amir Adventure</h5>
                                    <p class="text-muted mb-0"><i class="bi bi-geo-alt me-1"></i> Bamyan, Afghanistan</p>
                                </div>
                                <span class="fw-bold text-primary">$120</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <small class="text-muted">Dates:</small>
                                    <p class="mb-0">Nov 5 - Nov 7, 2025</p>
                                </div>
                                <div>
                                    <small class="text-muted">Guide:</small>
                                    <p class="mb-0">Pending</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-primary flex-fill">View Details</button>
                                <button class="btn btn-outline-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="/places" class="btn btn-primary btn-lg px-5 py-3">
                    Book New Adventure
                </a>
            </div>
        </div>
    </section>
@endsection
