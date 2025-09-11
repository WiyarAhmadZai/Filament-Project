@extends('bootstrap-layout')

@section('title', 'Historical Sites - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/IMG_3623.JPG') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Historical <span class="text-primary">Sites</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Explore Afghanistan's rich historical heritage and ancient landmarks
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Historical Places -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Ancient Treasures</h2>
                <p class="lead text-muted">
                    Discover the historical wonders of Afghanistan
                </p>
            </div>

            <div class="row g-4">
                <!-- Historical Place 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3612.JPG') }}" class="card-img-top" alt="Bamiyan Buddhas"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Bamiyan Buddhas</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Bamiyan</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                Ancient statues carved into cliffs, representing centuries of Buddhist culture.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$150/day</span>
                                <a href="/places/bamiyan-buddhas" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Historical Place 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3614.JPG') }}" class="card-img-top" alt="Minaret of Jam"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Minaret of Jam</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Herat</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                UNESCO World Heritage site, a masterpiece of Islamic architecture.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$100/day</span>
                                <a href="/places/minaret-of-jam" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Historical Place 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3624.JPG') }}" class="card-img-top" alt="Herat Citadel"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Herat Citadel</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Herat</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                Ancient fortress with stunning architecture and historical significance.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$90/day</span>
                                <a href="/places/herat-citadel" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
