@extends('bootstrap-layout')

@section('title', 'Community Videos - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('img/IMG_3628.JPG') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Community <span class="text-primary">Videos</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Watch and share videos from fellow travelers and locals
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Videos Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="2" placeholder="Share a video or ask questions..."></textarea>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <button type="button" class="btn btn-outline-secondary btn-sm">
                                            <i class="bi bi-camera-video me-1"></i> Upload Video
                                        </button>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row g-4">
                        <!-- Video 1 -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img src="{{ asset('img/IMG_3623.JPG') }}" class="card-img-top" alt="Video thumbnail"
                                        style="height: 200px; object-fit: cover;">
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 50px; height: 50px;">
                                            <i class="bi bi-play-fill text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Exploring Kabul's Historic Sites</h5>
                                    <p class="card-text text-muted small">A guided tour through the capital city's most
                                        important landmarks.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted small">15K views</span>
                                        <div>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-hand-thumbs-up me-1"></i>1.2K
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Video 2 -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img src="{{ asset('img/IMG_3628.JPG') }}" class="card-img-top" alt="Video thumbnail"
                                        style="height: 200px; object-fit: cover;">
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 50px; height: 50px;">
                                            <i class="bi bi-play-fill text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Traditional Afghan Cuisine</h5>
                                    <p class="card-text text-muted small">A culinary journey through Afghanistan's delicious
                                        food culture.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted small">22K views</span>
                                        <div>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-hand-thumbs-up me-1"></i>2.5K
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Video 3 -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img src="{{ asset('img/IMG_3629.JPG') }}" class="card-img-top" alt="Video thumbnail"
                                        style="height: 200px; object-fit: cover;">
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 50px; height: 50px;">
                                            <i class="bi bi-play-fill text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Herat's Architectural Marvels</h5>
                                    <p class="card-text text-muted small">Discovering the stunning Islamic architecture of
                                        Herat.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted small">18K views</span>
                                        <div>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-hand-thumbs-up me-1"></i>1.8K
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Video 4 -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img src="{{ asset('img/IMG_3612.JPG') }}" class="card-img-top" alt="Video thumbnail"
                                        style="height: 200px; object-fit: cover;">
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 50px; height: 50px;">
                                            <i class="bi bi-play-fill text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Bamiyan Valley Adventure</h5>
                                    <p class="card-text text-muted small">An unforgettable journey through the valley of
                                        the ancient Buddhas.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted small">32K views</span>
                                        <div>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-hand-thumbs-up me-1"></i>3.1K
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Popular Tags</h5>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-primary">#Afghanistan</span>
                                <span class="badge bg-secondary">#TravelVlog</span>
                                <span class="badge bg-success">#Tourism</span>
                                <span class="badge bg-danger">#Adventure</span>
                                <span class="badge bg-warning text-dark">#Culture</span>
                                <span class="badge bg-info">#History</span>
                                <span class="badge bg-dark">#Nature</span>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Top Video Creators</h5>
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('img/IMG.jpg') }}" class="rounded-circle me-3" alt="User"
                                    width="40" height="40">
                                <div>
                                    <h6 class="mb-0">Ahmad Wiyar</h6>
                                    <p class="text-muted mb-0 small">42 videos</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('img/IMG_3628.JPG') }}" class="rounded-circle me-3" alt="User"
                                    width="40" height="40">
                                <div>
                                    <h6 class="mb-0">Fatima Rahimi</h6>
                                    <p class="text-muted mb-0 small">38 videos</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/IMG_3629.JPG') }}" class="rounded-circle me-3" alt="User"
                                    width="40" height="40">
                                <div>
                                    <h6 class="mb-0">Mohammad Ali</h6>
                                    <p class="text-muted mb-0 small">29 videos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
