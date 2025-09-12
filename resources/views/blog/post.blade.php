@extends('homepage-layout')

@section('title', 'Afghanistan Tourism - Blog Post: ' . $slug)

@section('content')
    <!-- Blog Post Hero Section -->
    <section class="py-5">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $slug }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Featured Image -->
                    <div class="ratio ratio-16x9 mb-4 rounded-3 overflow-hidden" data-aos="fade-up">
                        <img src="{{ asset('img/20240924_093643.jpg') }}" alt="Blog Post Image" class="w-100">
                    </div>

                    <!-- Post Content -->
                    <article class="mb-5">
                        <div class="d-flex justify-content-between mb-4">
                            <span class="badge bg-primary">Travel Guide</span>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-calendar-alt me-2"></i>
                                <span>May 15, 2025</span>
                            </div>
                        </div>

                        <h1 class="display-5 fw-bold mb-4" data-aos="fade-up">Exploring the Wakhan Corridor: A Journey
                            Through Afghanistan's Hidden Valley</h1>

                        <div class="d-flex mb-5">
                            <img src="{{ asset('img/user-profile.jpg') }}" alt="Author" class="rounded-circle me-3"
                                width="40" height="40">
                            <div>
                                <h6 class="mb-0">By Sarah Traveler</h6>
                                <small class="text-muted">Afghanistan Travel Expert</small>
                            </div>
                        </div>

                        <div class="post-content">
                            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="200">
                                The Wakhan Corridor is one of Afghanistan's most remote and breathtaking regions, where
                                ancient traditions meet stunning natural beauty. This narrow strip of land in the far
                                northeast of Afghanistan connects the country to China and is surrounded by the majestic
                                Pamir and Karakoram mountains.
                            </p>

                            <p data-aos="fade-up" data-aos-delay="400">
                                In this article, we'll take you on a journey through this hidden valley, exploring its
                                unique culture, breathtaking landscapes, and the warm hospitality of its people. From the
                                ancient Wakhi communities to the stunning high-altitude lakes, there's so much to discover
                                in this untouched part of the world.
                            </p>

                            <h2 class="h4 fw-bold mt-5 mb-3" data-aos="fade-up" data-aos-delay="600">Best Time to Visit</h2>
                            <p data-aos="fade-up" data-aos-delay="800">
                                The best time to visit the Wakhan Corridor is from June to September when the weather is
                                more temperate and the mountain passes are accessible. During winter, heavy snowfall makes
                                the region almost completely inaccessible.
                            </p>

                            <h2 class="h4 fw-bold mt-5 mb-3" data-aos="fade-up" data-aos-delay="1000">How to Get There</h2>
                            <p data-aos="fade-up" data-aos-delay="1200">
                                Getting to the Wakhan Corridor requires some planning. Most travelers start in Kabul and
                                then fly to Fayzabad in Badakhshan province. From there, it's a multi-day journey by 4x4
                                vehicle through some of the most spectacular mountain scenery in the world.
                            </p>

                            <h2 class="h4 fw-bold mt-5 mb-3" data-aos="fade-up" data-aos-delay="1400">Local Culture</h2>
                            <p data-aos="fade-up" data-aos-delay="1600">
                                The Wakhi people have preserved their unique culture for centuries. You'll have the
                                opportunity to experience their traditional way of life, taste local dishes like 'khichdi'
                                (a rice and lentil dish), and learn about their Ismaili traditions.
                            </p>

                            <div class="d-flex flex-wrap gap-2 mt-4" data-aos="fade-up" data-aos-delay="1800">
                                <span class="badge bg-light text-dark">#Afghanistan</span>
                                <span class="badge bg-light text-dark">#WakhanCorridor</span>
                                <span class="badge bg-light text-dark">#TravelGuide</span>
                                <span class="badge bg-light text-dark">#Adventure</span>
                                <span class="badge bg-light text-dark">#Nature</span>
                            </div>
                        </div>
                    </article>

                    <!-- Related Posts -->
                    <section class="py-5">
                        <div class="text-center mb-5" data-aos="fade-up">
                            <h2 class="display-5 fw-bold mb-3">Related Stories</h2>
                            <p class="lead text-muted">You might also enjoy these articles</p>
                        </div>

                        <div class="row g-4">
                            <!-- Related Post 1 -->
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="{{ asset('img/20240524_152758kk.jpg') }}" alt="Related Post 1"
                                        class="card-img-top">
                                    <div class="card-body p-4">
                                        <h5 class="card-title fw-bold mb-3">Trekking in the Hindu Kush</h5>
                                        <p class="card-text text-muted mb-4">Discover the best hiking trails in
                                            Afghanistan's majestic mountain range.</p>
                                        <a href="{{ route('blog.post', 'hindu-kush-trekking') }}"
                                            class="btn btn-outline-primary btn-sm">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Post 2 -->
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="{{ asset('img/20241231_222751.jpg') }}" alt="Related Post 2"
                                        class="card-img-top">
                                    <div class="card-body p-4">
                                        <h5 class="card-title fw-bold mb-3">Cultural Heritage of Afghanistan</h5>
                                        <p class="card-text text-muted mb-4">Explore the rich cultural history of this
                                            ancient land.</p>
                                        <a href="{{ route('blog.post', 'afghanistan-cultural-heritage') }}"
                                            class="btn btn-outline-primary btn-sm">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Post 3 -->
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                                <div class="card border-0 shadow-sm h-100">
                                    <img src="{{ asset('img/20240924_093643.jpg') }}" alt="Related Post 3"
                                        class="card-img-top">
                                    <div class="card-body p-4">
                                        <h5 class="card-title fw-bold mb-3">Afghanistan's Natural Wonders</h5>
                                        <p class="card-text text-muted mb-4">From snow-capped mountains to lush valleys,
                                            experience nature at its finest.</p>
                                        <a href="{{ route('blog.post', 'afghanistan-natural-wonders') }}"
                                            class="btn btn-outline-primary btn-sm">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Share Section -->
                    <section class="py-5">
                        <div class="card border-0 bg-light p-4">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                                <p class="mb-3 mb-md-0">Share this article:</p>
                                <div>
                                    <a href="https://facebook.com" class="btn btn-sm btn-outline-primary me-2">
                                        <i class="fab fa-facebook-f me-2"></i>Share
                                    </a>
                                    <a href="https://twitter.com" class="btn btn-sm btn-outline-primary me-2">
                                        <i class="fab fa-twitter me-2"></i>Tweet
                                    </a>
                                    <a href="https://instagram.com" class="btn btn-sm btn-outline-primary">
                                        <i class="fab fa-instagram me-2"></i>Share
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Lightbox for image preview -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });
    </script>
@endsection
