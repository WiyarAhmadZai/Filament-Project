@extends('bootstrap-layout')

@section('title', 'Visa Services - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('img/20240924_093643.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Visa <span class="text-primary">Services</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Simplify your travel planning with our visa assistance
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Visa Information -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Visa Requirements</h2>
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
                                    <i class="bi bi-file-earmark-text fs-4"></i>
                                </div>
                                <h3 class="mb-0">Tourist Visa</h3>
                            </div>
                            <p class="card-text text-muted">
                                For leisure travel and sightseeing in Afghanistan.
                            </p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h6 class="mb-1">Validity</h6>
                                    <p class="mb-0 text-muted small">30 days</p>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-1">Entry Type</h6>
                                    <p class="mb-0 text-muted small">Single entry</p>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-1">Processing Time</h6>
                                    <p class="mb-0 text-muted small">5-10 business days</p>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-1">Required Documents</h6>
                                    <p class="mb-0 text-muted small">Passport, photos, application form</p>
                                </li>
                            </ul>
                            <div class="mt-4">
                                <span class="fw-bold text-primary fs-5">Fee: $50</span>
                                <a href="/tickets/visas/tourist" class="btn btn-primary float-end">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature-icon bg-primary text-white me-3">
                                    <i class="bi bi-briefcase fs-4"></i>
                                </div>
                                <h3 class="mb-0">Business Visa</h3>
                            </div>
                            <p class="card-text text-muted">
                                For business meetings, conferences, and professional activities.
                            </p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h6 class="mb-1">Validity</h6>
                                    <p class="mb-0 text-muted small">90 days</p>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-1">Entry Type</h6>
                                    <p class="mb-0 text-muted small">Multiple entry</p>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-1">Processing Time</h6>
                                    <p class="mb-0 text-muted small">7-14 business days</p>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-1">Required Documents</h6>
                                    <p class="mb-0 text-muted small">Business invitation, passport, photos</p>
                                </li>
                            </ul>
                            <div class="mt-4">
                                <span class="fw-bold text-primary fs-5">Fee: $150</span>
                                <a href="/tickets/visas/business" class="btn btn-primary float-end">Apply Now</a>
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
                                <h3 class="fw-bold mb-3">Need Assistance with Your Visa?</h3>
                                <p class="lead text-muted mb-4">
                                    Our visa experts can help you navigate the application process
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
