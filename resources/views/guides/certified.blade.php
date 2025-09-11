@extends('bootstrap-layout')

@section('title', 'Certified Guides - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/IMG_3623.JPG') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Certified <span class="text-primary">Guides</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Professional guides with official certification and expertise
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certified Guides -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Professional Experts</h2>
                <p class="lead text-muted">
                    Meet our officially certified tour guides
                </p>
            </div>

            <div class="row g-4">
                <!-- Guide 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3623.JPG') }}" class="card-img-top" alt="Guide"
                                style="height: 300px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="badge bg-primary">Certified</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Ahmad Wiyar</h5>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt me-1"></i> Kabul, Afghanistan</p>
                            <p class="card-text">
                                10+ years experience guiding tourists through historical sites and cultural experiences.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$50/day</span>
                                <a href="/guides/ahmad-wiyar" class="btn btn-outline-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Guide 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3628.JPG') }}" class="card-img-top" alt="Guide"
                                style="height: 300px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="badge bg-primary">Certified</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Mohammad Ali</h5>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt me-1"></i> Mazar-i-Sharif, Afghanistan</p>
                            <p class="card-text">
                                Expert in historical tours and religious sites with excellent English skills.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$55/day</span>
                                <a href="/guides/mohammad-ali" class="btn btn-outline-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Guide 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3629.JPG') }}" class="card-img-top" alt="Guide"
                                style="height: 300px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="badge bg-primary">Certified</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Karim Hassan</h5>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt me-1"></i> Herat, Afghanistan</p>
                            <p class="card-text">
                                Specialist in Islamic architecture and cultural heritage sites.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$48/day</span>
                                <a href="/guides/karim-hassan" class="btn btn-outline-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
