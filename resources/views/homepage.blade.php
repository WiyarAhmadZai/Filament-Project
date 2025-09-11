@extends('homepage-layout')

@section('title', 'Afghanistan Tourism - Discover the Beauty of Afghanistan')

@section('content')
    <!-- Hero Section with Video -->
    <div class="video-hero">
        <div class="video-overlay"></div>
        <video autoplay muted loop playsinline class="w-100">
            <source src="{{ asset('videos/مکان های تاریخی افغانستان زیبا historical places of Afghanistan.mp4') }}"
                type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="hero-content text-center">
            <h1 class="display-5 fw-bold text-white mb-4">Discover the Beauty of Afghanistan</h1>
            <p class="lead text-white mb-5">Experience the rich culture, breathtaking landscapes, and warm hospitality of
                Afghanistan</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="/places" class="btn btn-primary">
                    Explore Places
                </a>
                <a href="/guides" class="btn btn-outline-light">
                    Find a Guide
                </a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-dark mb-3">Why Choose Afghanistan?</h2>
                <p class="lead text-muted">Experience the unique blend of history, culture, and natural beauty</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4 text-center">
                    <div class="feature-icon mx-auto mb-4">
                        <i class="fas fa-mountain fa-lg"></i>
                    </div>
                    <h3 class="h5 fw-bold mb-3">Breathtaking Landscapes</h3>
                    <p class="text-muted">From snow-capped mountains to lush valleys, experience nature at its finest</p>
                </div>

                <div class="col-md-4 text-center">
                    <div class="feature-icon mx-auto mb-4">
                        <i class="fas fa-history fa-lg"></i>
                    </div>
                    <h3 class="h5 fw-bold mb-3">Rich Cultural Heritage</h3>
                    <p class="text-muted">Explore thousands of years of history and vibrant cultural traditions</p>
                </div>

                <div class="col-md-4 text-center">
                    <div class="feature-icon mx-auto mb-4">
                        <i class="fas fa-smile fa-lg"></i>
                    </div>
                    <h3 class="h5 fw-bold mb-3">Warm Hospitality</h3>
                    <p class="text-muted">Experience the legendary Afghan hospitality and welcoming communities</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Places Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-dark mb-3">Popular Destinations</h2>
                <p class="lead text-muted">Discover our most visited tourist attractions</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/1716635911147.jpg') }}" class="card-img-top" alt="Bamiyan Valley">
                        <div class="card-body">
                            <h5 class="card-title">Bamiyan Valley</h5>
                            <p class="card-text text-muted">Home to the ancient Buddhas and stunning valley landscapes</p>
                            <a href="/places/bamiyan-valley" class="btn btn-outline-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/20240924_093643.jpg') }}" class="card-img-top" alt="Band-e-Amir">
                        <div class="card-body">
                            <h5 class="card-title">Band-e-Amir</h5>
                            <p class="card-text text-muted">Six spectacular deep blue lakes separated by natural travertine
                                dams</p>
                            <a href="/places/band-e-amir" class="btn btn-outline-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/20241231_222751.jpg') }}" class="card-img-top" alt="Minaret of Jam">
                        <div class="card-body">
                            <h5 class="card-title">Minaret of Jam</h5>
                            <p class="card-text text-muted">A UNESCO World Heritage site and one of the finest examples of
                                Islamic architecture</p>
                            <a href="/places/minaret-of-jam" class="btn btn-outline-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/20240524_152758kk.jpg') }}" class="card-img-top" alt="Kabul">
                        <div class="card-body">
                            <h5 class="card-title">Kabul</h5>
                            <p class="card-text text-muted">The vibrant capital city with rich history and cultural
                                attractions</p>
                            <a href="/places/kabul" class="btn btn-outline-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="card bg-primary text-white border-0 shadow-lg">
                <div class="card-body p-5">
                    <div class="row align-items-center">
                        <div class="col-md-8 mb-4 mb-md-0">
                            <h2 class="display-6 fw-bold mb-3">Ready to Explore Afghanistan?</h2>
                            <p class="mb-0">Plan your dream trip with our expert guides and travel packages</p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="/guides" class="btn btn-light btn-lg">
                                Find a Guide
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
