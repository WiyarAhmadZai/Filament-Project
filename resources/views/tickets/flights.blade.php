@extends('bootstrap-layout')

@section('title', 'Flight Tickets - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('img/20241231_222751.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Flight <span class="text-primary">Tickets</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Book your journey to Afghanistan with competitive prices
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Flight Information -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Flight Options</h2>
                <p class="lead text-muted">
                    Find the best flights to Afghanistan from major international airports
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
                                <h3 class="mb-0">From Dubai (DXB)</h3>
                            </div>
                            <p class="card-text text-muted">
                                Regular flights to Kabul with convenient connections.
                            </p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Flight Duration</span>
                                    <span class="fw-bold">3 hours 30 minutes</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Airlines</span>
                                    <span class="fw-bold">FlyDubai, Emirates</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Frequency</span>
                                    <span class="fw-bold">Daily</span>
                                </li>
                            </ul>
                            <div class="mt-4">
                                <span class="fw-bold text-primary fs-5">From $450</span>
                                <a href="/tickets/flights/dubai" class="btn btn-primary float-end">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature-icon bg-primary text-white me-3">
                                    <i class="bi bi-airplane fs-4"></i>
                                </div>
                                <h3 class="mb-0">From Istanbul (IST)</h3>
                            </div>
                            <p class="card-text text-muted">
                                Direct and connecting flights to major Afghan cities.
                            </p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Flight Duration</span>
                                    <span class="fw-bold">4 hours 15 minutes</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Airlines</span>
                                    <span class="fw-bold">Turkish Airlines</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Frequency</span>
                                    <span class="fw-bold">Multiple daily</span>
                                </li>
                            </ul>
                            <div class="mt-4">
                                <span class="fw-bold text-primary fs-5">From $520</span>
                                <a href="/tickets/flights/istanbul" class="btn btn-primary float-end">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature-icon bg-primary text-white me-3">
                                    <i class="bi bi-airplane fs-4"></i>
                                </div>
                                <h3 class="mb-0">From Delhi (DEL)</h3>
                            </div>
                            <p class="card-text text-muted">
                                Frequent flights to Kabul with multiple airline options.
                            </p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Flight Duration</span>
                                    <span class="fw-bold">2 hours 45 minutes</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Airlines</span>
                                    <span class="fw-bold">Air India, IndiGo</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Frequency</span>
                                    <span class="fw-bold">Daily</span>
                                </li>
                            </ul>
                            <div class="mt-4">
                                <span class="fw-bold text-primary fs-5">From $380</span>
                                <a href="/tickets/flights/delhi" class="btn btn-primary float-end">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature-icon bg-primary text-white me-3">
                                    <i class="bi bi-airplane fs-4"></i>
                                </div>
                                <h3 class="mb-0">From Moscow (SVO)</h3>
                            </div>
                            <p class="card-text text-muted">
                                Weekly flights to Kabul with comfortable seating options.
                            </p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Flight Duration</span>
                                    <span class="fw-bold">5 hours 30 minutes</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Airlines</span>
                                    <span class="fw-bold">Aeroflot</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Frequency</span>
                                    <span class="fw-bold">3 times weekly</span>
                                </li>
                            </ul>
                            <div class="mt-4">
                                <span class="fw-bold text-primary fs-5">From $650</span>
                                <a href="/tickets/flights/moscow" class="btn btn-primary float-end">Book Now</a>
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
                                <h3 class="fw-bold mb-3">Need Help Booking Your Flight?</h3>
                                <p class="lead text-muted mb-4">
                                    Our travel experts can find the best deals and assist with bookings
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
