@extends('bootstrap-layout')

@section('title', 'Cultural Experiences - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/IMG_3623.JPG') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Cultural <span class="text-primary">Experiences</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Immerse yourself in Afghanistan's rich cultural traditions
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cultural Experiences -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Traditional Heritage</h2>
                <p class="lead text-muted">
                    Experience authentic Afghan culture and traditions
                </p>
            </div>

            <div class="row g-4">
                <!-- Cultural Experience 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3623.JPG') }}" class="card-img-top" alt="Traditional Crafts"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Traditional Crafts</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Kabul</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                Learn traditional carpet weaving, pottery, and other handicrafts.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$50/session</span>
                                <a href="/places/traditional-crafts" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cultural Experience 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3628.JPG') }}" class="card-img-top" alt="Cultural Festival"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Cultural Festival</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Mazar-i-Sharif</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                Participate in traditional festivals and celebrations.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$75/day</span>
                                <a href="/places/cultural-festival" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cultural Experience 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3629.JPG') }}" class="card-img-top" alt="Culinary Tour"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Culinary Tour</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Herat</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                Taste authentic Afghan cuisine and learn traditional cooking.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$60/session</span>
                                <a href="/places/culinary-tour" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
