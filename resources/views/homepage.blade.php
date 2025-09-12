@extends('homepage-layout')

@section('title', 'Afghanistan Tourism - Discover the Beauty of Afghanistan')

@section('content')
    <!-- Hero Section with Video -->
    <div class="video-hero" id="home">
        <div class="video-overlay"></div>
        <video autoplay muted loop playsinline class="w-100">
            <source src="{{ asset('videos/مکان های تاریخی افغانستان زیبا historical places of Afghanistan.mp4') }}"
                type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="hero-content text-center">
            <h1 class="display-5 fw-bold text-white mb-4" data-aos="fade-up">
                Discover the Beauty of Afghanistan
            </h1>
            <p class="lead text-white mb-5" data-aos="fade-up" data-aos-delay="200">
                Experience the rich culture, breathtaking landscapes, and warm hospitality of
                Afghanistan
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3" data-aos="fade-up" data-aos-delay="400">
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
    <section class="py-5" id="features">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Why Choose Afghanistan?</h2>
                <p class="lead text-muted">Experience the unique blend of history, culture, and natural beauty</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon mx-auto mb-4">
                        <i class="fas fa-mountain fa-lg"></i>
                    </div>
                    <h3 class="h5 fw-bold mb-3">Breathtaking Landscapes</h3>
                    <p class="text-muted">From snow-capped mountains to lush valleys, experience nature at its finest</p>
                </div>

                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-icon mx-auto mb-4">
                        <i class="fas fa-history fa-lg"></i>
                    </div>
                    <h3 class="h5 fw-bold mb-3">Rich Cultural Heritage</h3>
                    <p class="text-muted">Explore thousands of years of history and vibrant cultural traditions</p>
                </div>

                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="600">
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
    <section class="py-5 bg-light" id="places">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Popular Destinations</h2>
                <p class="lead text-muted">Discover our most visited tourist attractions</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/1716635911147.jpg') }}" class="card-img-top" alt="Bamiyan Valley">
                        <div class="card-body">
                            <h5 class="card-title">Bamiyan Valley</h5>
                            <p class="card-text text-muted">Home to the ancient Buddhas and stunning valley landscapes</p>
                            <a href="/places/bamiyan-valley" class="btn btn-outline-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
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

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
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

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="800">
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

    <!-- Interactive Map Section -->
    <section class="py-5" id="map">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                    <h2 class="display-5 fw-bold mb-3">Explore Afghanistan</h2>
                    <p class="lead text-muted">Interactive map showing provinces and key tourist attractions</p>
                    <p class="mb-4">Click on different provinces to discover local attractions, cultural sites, and
                        natural wonders.</p>
                    <a href="/places" class="btn btn-primary">
                        View All Destinations
                    </a>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="map-container position-relative">
                        <img src="{{ asset('img/map-of-afghanistan.png') }}" alt="Map of Afghanistan" class="img-fluid">
                        <!-- Province markers would be added here -->
                        <div class="province-marker" style="top: 40%; left: 45%;">Kabul</div>
                        <div class="province-marker" style="top: 30%; left: 35%;">Balkh</div>
                        <div class="province-marker" style="top: 50%; left: 55%;">Kandahar</div>
                        <div class="province-marker" style="top: 25%; left: 50%;">Bamiyan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sections Section -->
    <section class="py-5 bg-light" id="sections">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Explore Afghanistan</h2>
                <p class="lead text-muted">Sections for Historical Sites, Culture, Food, Adventure Tourism, Nature,
                    Handicrafts, Hospitality</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/historical-site.jpg') }}" class="card-img-top" alt="Historical Sites">
                        <div class="card-body">
                            <h5 class="card-title">Historical Sites</h5>
                            <p class="card-text text-muted">Discover Afghanistan's rich history through its ancient
                                monuments and archaeological sites.</p>
                            <a href="/places/historical" class="btn btn-outline-primary btn-sm">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/culture.jpg') }}" class="card-img-top" alt="Culture">
                        <div class="card-body">
                            <h5 class="card-title">Culture</h5>
                            <p class="card-text text-muted">Experience the vibrant culture and traditions of Afghanistan's
                                diverse ethnic groups.</p>
                            <a href="/places/cultural" class="btn btn-outline-primary btn-sm">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/nature.jpg') }}" class="card-img-top" alt="Nature">
                        <div class="card-body">
                            <h5 class="card-title">Nature</h5>
                            <p class="card-text text-muted">Breathtaking landscapes from snow-capped mountains to lush
                                valleys.</p>
                            <a href="/places/natural" class="btn btn-outline-primary btn-sm">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/food.jpg') }}" class="card-img-top" alt="Food">
                        <div class="card-body">
                            <h5 class="card-title">Food</h5>
                            <p class="card-text text-muted">Savor the unique flavors of Afghan cuisine and traditional
                                dishes.</p>
                            <a href="/places/food" class="btn btn-outline-primary btn-sm">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="1000">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/adventure.jpg') }}" class="card-img-top" alt="Adventure Tourism">
                        <div class="card-body">
                            <h5 class="card-title">Adventure Tourism</h5>
                            <p class="card-text text-muted">Experience thrilling adventures in Afghanistan's stunning
                                natural landscapes.</p>
                            <a href="/places/adventure" class="btn btn-outline-primary btn-sm">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="1200">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('img/handicrafts.jpg') }}" class="card-img-top" alt="Handicrafts">
                        <div class="card-body">
                            <h5 class="card-title">Handicrafts</h5>
                            <p class="card-text text-muted">Discover traditional Afghan handicrafts and artisanal products.
                            </p>
                            <a href="/shop/crafts" class="btn btn-outline-primary btn-sm">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tours & Packages Section -->
    <section class="py-5" id="tours">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                    <h2 class="display-5 fw-bold mb-3">Tours & Packages</h2>
                    <p class="lead text-muted">Guided tours, trekking, cultural visits, and customized travel packages</p>
                    <p class="mb-4">Choose from a variety of curated tours that showcase the best of Afghanistan's
                        cultural and natural heritage.</p>
                    <a href="/tours" class="btn btn-primary btn-lg">
                        View All Packages
                    </a>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="row g-3">
                        <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">Historical Tour</h5>
                                        <span class="badge bg-primary">$250</span>
                                    </div>
                                    <p class="text-muted mb-3">Explore Afghanistan's rich history with our 7-day historical
                                        tour covering Kabul, Bamiyan, and Herat.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>4 days</span>
                                        <a href="/tours/historical" class="btn btn-outline-primary btn-sm">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12" data-aos="fade-up" data-aos-delay="400">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">Adventure Trek</h5>
                                        <span class="badge bg-primary">$350</span>
                                    </div>
                                    <p class="text-muted mb-3">Experience the stunning Wakhan Corridor with our 10-day
                                        adventure trekking package.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>10 days</span>
                                        <a href="/tours/adventure" class="btn btn-outline-primary btn-sm">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">Cultural Experience</h5>
                                        <span class="badge bg-primary">$200</span>
                                    </div>
                                    <p class="text-muted mb-3">Immerse yourself in Afghan culture with homestays, local
                                        festivals, and traditional workshops.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>5 days</span>
                                        <a href="/tours/cultural" class="btn btn-outline-primary btn-sm">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-8 mb-4 mb-md-0" data-aos="fade-right">
                    <h2 class="display-6 fw-bold mb-3">Ready to Explore Afghanistan?</h2>
                    <p class="mb-0">Plan your dream trip with our expert guides and travel packages</p>
                </div>
                <div class="col-md-4 text-md-end" data-aos="fade-left">
                    <a href="/guides" class="btn btn-light btn-lg">
                        Find a Guide
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Add AOS library -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>
@endsection
