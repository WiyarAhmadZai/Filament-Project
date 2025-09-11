@extends('bootstrap-layout')

@section('title', 'Tourist Places - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ asset('img/20240924_093643.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Discover <span class="text-primary">Afghanistan</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Explore the breathtaking tourist destinations across Afghanistan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Places Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Popular Tourist Places</h2>
                <p class="lead text-muted">
                    Discover the most beautiful destinations in Afghanistan
                </p>
            </div>

            <div class="row g-4">
                <!-- Place 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/1716635911147.jpg') }}" class="card-img-top" alt="Bamiyan Valley"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Bamiyan Valley</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Bamiyan</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                Home to the ancient Buddhas and stunning valley landscapes
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$150/day</span>
                                <a href="/places/bamiyan-valley" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Place 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/20240924_093643.jpg') }}" class="card-img-top" alt="Band-e-Amir"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Band-e-Amir</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Bamyan</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                Six spectacular deep blue lakes separated by natural travertine dams
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$120/day</span>
                                <a href="/places/band-e-amir" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Place 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/20241231_222751.jpg') }}" class="card-img-top" alt="Minaret of Jam"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Minaret of Jam</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Herat</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                A UNESCO World Heritage site and one of the finest examples of Islamic architecture
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$100/day</span>
                                <a href="/places/minaret-of-jam" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Place 4 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/20240524_152758kk.jpg') }}" class="card-img-top" alt="Kabul"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Kabul</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Kabul</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                The vibrant capital city with rich history and cultural attractions
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$80/day</span>
                                <a href="/places/kabul" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Place 5 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/20241102_011352.jpg') }}" class="card-img-top" alt="Herat"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Herat</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Herat</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                Known as the "Pearl of Khorasan" with stunning architecture
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$90/day</span>
                                <a href="/places/herat" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Place 6 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/20241231_222605.jpg') }}" class="card-img-top" alt="Mazar-i-Sharif"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Mazar-i-Sharif</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Balkh</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                Home to the famous Blue Mosque and important historical sites
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$85/day</span>
                                <a href="/places/mazar-i-sharif" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
