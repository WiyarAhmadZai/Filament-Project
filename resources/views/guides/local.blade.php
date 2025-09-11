@extends('bootstrap-layout')

@section('title', 'Local Experts - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/IMG_3623.JPG') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Local <span class="text-primary">Experts</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Authentic local guides with deep cultural knowledge
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Local Experts -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Community Knowledge</h2>
                <p class="lead text-muted">
                    Connect with local experts who know Afghanistan intimately
                </p>
            </div>

            <div class="row g-4">
                <!-- Expert 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3623.JPG') }}" class="card-img-top" alt="Expert"
                                style="height: 300px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="badge bg-success">Local Expert</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Fatima Rahimi</h5>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt me-1"></i> Herat, Afghanistan</p>
                            <p class="card-text">
                                Specializes in cultural tours and traditional crafts workshops for visitors.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$45/day</span>
                                <a href="/guides/fatima-rahimi" class="btn btn-outline-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Expert 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3628.JPG') }}" class="card-img-top" alt="Expert"
                                style="height: 300px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="badge bg-success">Local Expert</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Zainab Khan</h5>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt me-1"></i> Kabul, Afghanistan</p>
                            <p class="card-text">
                                Expert in traditional Afghan cuisine and cooking classes for tourists.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$40/session</span>
                                <a href="/guides/zainab-khan" class="btn btn-outline-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Expert 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3629.JPG') }}" class="card-img-top" alt="Expert"
                                style="height: 300px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="badge bg-success">Local Expert</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Hassan Mir</h5>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt me-1"></i> Bamyan, Afghanistan</p>
                            <p class="card-text">
                                Local historian with deep knowledge of Bamiyan Valley and its heritage.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$35/hour</span>
                                <a href="/guides/hassan-mir" class="btn btn-outline-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
