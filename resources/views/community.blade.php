@extends('bootstrap-layout')

@section('title', 'Community - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ asset('img/20241231_222605.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Travel <span class="text-primary">Community</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Connect with fellow travelers and share your Afghan experiences
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Tabs -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Join Our Community</h2>
                <p class="lead text-muted">
                    Share experiences, ask questions, and connect with other travelers
                </p>
            </div>

            <ul class="nav nav-tabs justify-content-center mb-4" id="communityTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="posts-tab" data-bs-toggle="tab" data-bs-target="#posts"
                        type="button" role="tab">
                        <i class="bi bi-chat-square-text me-2"></i>Posts
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button"
                        role="tab">
                        <i class="bi bi-camera-video me-2"></i>Videos
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="members-tab" data-bs-toggle="tab" data-bs-target="#members" type="button"
                        role="tab">
                        <i class="bi bi-people me-2"></i>Members
                    </button>
                </li>
            </ul>

            <div class="tab-content" id="communityTabContent">
                <!-- Posts Tab -->
                <div class="tab-pane fade show active" id="posts" role="tabpanel">
                    <div class="row g-4">
                        <!-- Post 1 -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <img src="{{ asset('img/wiyar.jpg') }}" class="rounded-circle me-3" alt="User"
                                            width="50" height="50">
                                        <div>
                                            <h5 class="mb-0">Ahmad Wiyar</h5>
                                            <p class="text-muted mb-0 small">Posted 2 hours ago</p>
                                        </div>
                                    </div>
                                    <p class="card-text">
                                        Just returned from an amazing trip to Bamiyan Valley! The ancient Buddhas are truly
                                        breathtaking.
                                        Highly recommend visiting with a local guide who can share the fascinating history.
                                    </p>
                                    <img src="{{ asset('img/1716635911147.jpg') }}" class="card-img mb-3" alt="Post image"
                                        style="height: 200px; object-fit: cover;">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-heart me-1"></i>24
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary ms-2">
                                                <i class="bi bi-chat me-1"></i>8
                                            </button>
                                        </div>
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="bi bi-share me-1"></i>Share
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Post 2 -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <img src="{{ asset('img/Cute Photo.jpg') }}" class="rounded-circle me-3"
                                            alt="User" width="50" height="50">
                                        <div>
                                            <h5 class="mb-0">Fatima Rahimi</h5>
                                            <p class="text-muted mb-0 small">Posted 1 day ago</p>
                                        </div>
                                    </div>
                                    <p class="card-text">
                                        Sharing some incredible photos from my recent visit to Band-e-Amir National Park.
                                        The six stunning turquoise lakes are unlike anything I've ever seen. Nature at its
                                        finest!
                                    </p>
                                    <img src="{{ asset('img/20240924_093643.jpg') }}" class="card-img mb-3" alt="Post image"
                                        style="height: 200px; object-fit: cover;">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-heart me-1"></i>42
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary ms-2">
                                                <i class="bi bi-chat me-1"></i>15
                                            </button>
                                        </div>
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="bi bi-share me-1"></i>Share
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Videos Tab -->
                <div class="tab-pane fade" id="videos" role="tabpanel">
                    <div class="row g-4">
                        <!-- Video 1 -->
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img src="{{ asset('img/20241231_222751.jpg') }}" class="card-img-top"
                                        alt="Video thumbnail" style="height: 200px; object-fit: cover;">
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
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img src="{{ asset('img/20240524_152758kk.jpg') }}" class="card-img-top"
                                        alt="Video thumbnail" style="height: 200px; object-fit: cover;">
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 50px; height: 50px;">
                                            <i class="bi bi-play-fill text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Traditional Afghan Cuisine</h5>
                                    <p class="card-text text-muted small">A culinary journey through Afghanistan's
                                        delicious food culture.</p>
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
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img src="{{ asset('img/20241102_011352.jpg') }}" class="card-img-top"
                                        alt="Video thumbnail" style="height: 200px; object-fit: cover;">
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
                    </div>
                </div>

                <!-- Members Tab -->
                <div class="tab-pane fade" id="members" role="tabpanel">
                    <div class="row g-4">
                        <!-- Member 1 -->
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card border-0 shadow-sm h-100 text-center">
                                <img src="{{ asset('img/wiyar.jpg') }}" class="card-img-top rounded-circle mx-auto mt-4"
                                    alt="Member" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Ahmad Wiyar</h5>
                                    <p class="text-muted mb-2">Kabul, Afghanistan</p>
                                    <p class="card-text small">Frequent traveler and photography enthusiast</p>
                                    <button class="btn btn-outline-primary btn-sm">Follow</button>
                                </div>
                            </div>
                        </div>

                        <!-- Member 2 -->
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="card border-0 shadow-sm h-100 text-center">
                                <img src="{{ asset('img/Cute Photo.jpg') }}"
                                    class="card-img-top rounded-circle mx-auto mt-4" alt="Member"
                                    style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Fatima Rahimi</h5>
                                    <p class="text-muted mb-2">Herat, Afghanistan</p>
                                    <p class="card-text small">Local guide and cultural expert</p>
                                    <button class="btn btn-outline-primary btn-sm">Follow</button>
                                </div>
                            </div>
                        </div>

                        <!-- Member 3 -->
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="card border-0 shadow-sm h-100 text-center">
                                <img src="{{ asset('img/Smile.jpg') }}" class="card-img-top rounded-circle mx-auto mt-4"
                                    alt="Member" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Mohammad Ali</h5>
                                    <p class="text-muted mb-2">Mazar-i-Sharif, Afghanistan</p>
                                    <p class="card-text small">History buff and tour guide</p>
                                    <button class="btn btn-outline-primary btn-sm">Follow</button>
                                </div>
                            </div>
                        </div>

                        <!-- Member 4 -->
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="card border-0 shadow-sm h-100 text-center">
                                <img src="{{ asset('img/Wiyar Pic.jpg') }}"
                                    class="card-img-top rounded-circle mx-auto mt-4" alt="Member"
                                    style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Sarah Johnson</h5>
                                    <p class="text-muted mb-2">London, UK</p>
                                    <p class="card-text small">International traveler and blogger</p>
                                    <button class="btn btn-outline-primary btn-sm">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
