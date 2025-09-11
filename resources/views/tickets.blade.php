@extends('bootstrap-layout')

@section('title', 'Tickets & Visas - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ asset('img/20241102_011352.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Travel <span class="text-primary">Tickets</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Plan your journey to Afghanistan with our ticket and visa services
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tickets Information -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Ticket & Visa Information</h2>
                <p class="lead text-muted">
                    Everything you need to know about traveling to Afghanistan
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature-icon bg-primary text-white me-3">
                                    <i class="bi bi-airplane fs-4"></i>
                                </div>
                                <h3 class="mb-0">Flight Tickets</h3>
                            </div>
                            <p class="card-text text-muted">
                                We offer competitive prices on flights to Afghanistan from major international airports.
                            </p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>From Dubai</span>
                                    <span class="fw-bold text-primary">From $450</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>From Istanbul</span>
                                    <span class="fw-bold text-primary">From $520</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>From Delhi</span>
                                    <span class="fw-bold text-primary">From $380</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>From Moscow</span>
                                    <span class="fw-bold text-primary">From $650</span>
                                </li>
                            </ul>
                            <div class="mt-4">
                                <a href="/tickets/flights" class="btn btn-primary w-100">Book Flight Tickets</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature-icon bg-primary text-white me-3">
                                    <i class="bi bi-file-earmark-text fs-4"></i>
                                </div>
                                <h3 class="mb-0">Visa Requirements</h3>
                            </div>
                            <p class="card-text text-muted">
                                Visa information for travelers to Afghanistan varies by nationality.
                            </p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h6 class="mb-1">Tourist Visa</h6>
                                    <p class="mb-0 text-muted small">30-day validity, single entry</p>
                                    <span class="fw-bold text-primary">From $50</span>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-1">Business Visa</h6>
                                    <p class="mb-0 text-muted small">90-day validity, multiple entry</p>
                                    <span class="fw-bold text-primary">From $150</span>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-1">Transit Visa</h6>
                                    <p class="mb-0 text-muted small">For short stays during travel</p>
                                    <span class="fw-bold text-primary">From $30</span>
                                </li>
                            </ul>
                            <div class="mt-4">
                                <a href="/tickets/visas" class="btn btn-primary w-100">Apply for Visa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5" data-aos="fade-up">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <div class="feature-icon bg-primary text-white mx-auto mb-4">
                                    <i class="bi bi-headset fs-3"></i>
                                </div>
                                <h3 class="fw-bold mb-3">Need Assistance?</h3>
                                <p class="lead text-muted mb-4">
                                    Our travel experts are here to help you plan your journey to Afghanistan
                                </p>
                                <div class="d-flex flex-wrap justify-content-center gap-3">
                                    <a href="/contact" class="btn btn-primary btn-lg px-5">
                                        <i class="bi bi-envelope me-2"></i>Contact Us
                                    </a>
                                    <a href="tel:+93776992603" class="btn btn-outline-primary btn-lg px-5">
                                        <i class="bi bi-telephone me-2"></i>Call Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
