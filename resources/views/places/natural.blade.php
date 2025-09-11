@extends('bootstrap-layout')

@section('title', 'Natural Wonders - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/IMG_3628.JPG') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Natural <span class="text-primary">Wonders</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Experience Afghanistan's breathtaking natural landscapes
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Natural Places -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Stunning Landscapes</h2>
                <p class="lead text-muted">
                    Discover the natural beauty of Afghanistan
                </p>
            </div>

            <div class="row g-4">
                <!-- Natural Place 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3629.JPG') }}" class="card-img-top" alt="Band-e-Amir"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Band-e-Amir</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Bamyan</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                Six spectacular deep blue lakes separated by natural travertine dams.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$120/day</span>
                                <a href="/places/band-e-amir" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Natural Place 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3623.JPG') }}" class="card-img-top" alt="Pamir Mountains"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Pamir Mountains</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Badakhshan</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                Known as the "Roof of the World", offering incredible trekking experiences.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$200/day</span>
                                <a href="/places/pamir-mountains" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Natural Place 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="{{ asset('img/IMG_3605.JPG') }}" class="card-img-top" alt="Kunar Valley"
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 p-3 text-white">
                                <h5 class="fw-bold">Kunar Valley</h5>
                                <p class="mb-0"><i class="bi bi-geo-alt me-1"></i> Kunar</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">
                                Lush green valley with rivers, forests, and traditional villages.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$80/day</span>
                                <a href="/places/kunar-valley" class="btn btn-outline-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
