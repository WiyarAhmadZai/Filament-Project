@extends('bootstrap-layout')

@section('title', 'Community Members - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('img/IMG_3623.JPG') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Community <span class="text-primary">Members</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Connect with fellow travelers and Afghan locals
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Members Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-4" data-aos="fade-up">
                <div class="col-12">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search members..." aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>

            <div class="row g-4">
                <!-- Member 1 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/IMG.jpg') }}" class="card-img-top rounded-circle mx-auto mt-4"
                            alt="Member" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Ahmad Wiyar</h5>
                            <p class="text-muted mb-2">Kabul, Afghanistan</p>
                            <p class="card-text small">Frequent traveler and photography enthusiast</p>
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <span class="badge bg-primary">124 Posts</span>
                                <span class="badge bg-success">42 Videos</span>
                            </div>
                            <button class="btn btn-outline-primary btn-sm">Follow</button>
                        </div>
                    </div>
                </div>

                <!-- Member 2 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/IMG_3628.JPG') }}" class="card-img-top rounded-circle mx-auto mt-4"
                            alt="Member" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Fatima Rahimi</h5>
                            <p class="text-muted mb-2">Herat, Afghanistan</p>
                            <p class="card-text small">Local guide and cultural expert</p>
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <span class="badge bg-primary">98 Posts</span>
                                <span class="badge bg-success">38 Videos</span>
                            </div>
                            <button class="btn btn-outline-primary btn-sm">Follow</button>
                        </div>
                    </div>
                </div>

                <!-- Member 3 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/IMG_3629.JPG') }}" class="card-img-top rounded-circle mx-auto mt-4"
                            alt="Member" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Mohammad Ali</h5>
                            <p class="text-muted mb-2">Mazar-i-Sharif, Afghanistan</p>
                            <p class="card-text small">History buff and tour guide</p>
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <span class="badge bg-primary">87 Posts</span>
                                <span class="badge bg-success">29 Videos</span>
                            </div>
                            <button class="btn btn-outline-primary btn-sm">Follow</button>
                        </div>
                    </div>
                </div>

                <!-- Member 4 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/IMG_3612.JPG') }}" class="card-img-top rounded-circle mx-auto mt-4"
                            alt="Member" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Sarah Johnson</h5>
                            <p class="text-muted mb-2">London, UK</p>
                            <p class="card-text small">International traveler and blogger</p>
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <span class="badge bg-primary">65 Posts</span>
                                <span class="badge bg-success">18 Videos</span>
                            </div>
                            <button class="btn btn-outline-primary btn-sm">Follow</button>
                        </div>
                    </div>
                </div>

                <!-- Member 5 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/IMG_3614.JPG') }}" class="card-img-top rounded-circle mx-auto mt-4"
                            alt="Member" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Karim Hassan</h5>
                            <p class="text-muted mb-2">Herat, Afghanistan</p>
                            <p class="card-text small">Traditional crafts expert</p>
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <span class="badge bg-primary">76 Posts</span>
                                <span class="badge bg-success">22 Videos</span>
                            </div>
                            <button class="btn btn-outline-primary btn-sm">Follow</button>
                        </div>
                    </div>
                </div>

                <!-- Member 6 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/IMG_3624.JPG') }}" class="card-img-top rounded-circle mx-auto mt-4"
                            alt="Member" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Zainab Khan</h5>
                            <p class="text-muted mb-2">Kabul, Afghanistan</p>
                            <p class="card-text small">Culinary artist and food blogger</p>
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <span class="badge bg-primary">54 Posts</span>
                                <span class="badge bg-success">15 Videos</span>
                            </div>
                            <button class="btn btn-outline-primary btn-sm">Follow</button>
                        </div>
                    </div>
                </div>

                <!-- Member 7 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="700">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/IMG_3605.JPG') }}" class="card-img-top rounded-circle mx-auto mt-4"
                            alt="Member" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Hassan Mir</h5>
                            <p class="text-muted mb-2">Bamyan, Afghanistan</p>
                            <p class="card-text small">Local historian and storyteller</p>
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <span class="badge bg-primary">68 Posts</span>
                                <span class="badge bg-success">19 Videos</span>
                            </div>
                            <button class="btn btn-outline-primary btn-sm">Follow</button>
                        </div>
                    </div>
                </div>

                <!-- Member 8 -->
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="800">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/648491.jpg') }}" class="card-img-top rounded-circle mx-auto mt-4"
                            alt="Member" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">David Wilson</h5>
                            <p class="text-muted mb-2">Sydney, Australia</p>
                            <p class="card-text small">Adventure traveler and photographer</p>
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <span class="badge bg-primary">42 Posts</span>
                                <span class="badge bg-success">12 Videos</span>
                            </div>
                            <button class="btn btn-outline-primary btn-sm">Follow</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5" data-aos="fade-up">
                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
