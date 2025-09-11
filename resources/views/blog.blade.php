@extends('homepage-layout')

@section('title', 'Afghanistan Tourism - Travel Blog')

@section('content')
    <!-- Blog Hero Section -->
    <section class="py-5">
        <div class="container text-center">
            <h1 class="display-5 fw-bold mb-4" data-aos="fade-up">Travel Blog</h1>
            <p class="lead text-muted mb-5" data-aos="fade-up" data-aos-delay="200">
                Explore travel guides, history, and culture posts about Afghanistan
            </p>
        </div>
    </section>

    <!-- Blog Posts Grid -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-4">
                    <!-- Categories Sidebar -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold mb-3">Categories</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="{{ route('blog.category', 'travel-guides') }}" class="text-muted">
                                        <i class="fas fa-chevron-right me-2"></i>Travel Guides
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('blog.category', 'history') }}" class="text-muted">
                                        <i class="fas fa-chevron-right me-2"></i>History
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('blog.category', 'culture') }}" class="text-muted">
                                        <i class="fas fa-chevron-right me-2"></i>Culture
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('blog.category', 'adventure') }}" class="text-muted">
                                        <i class="fas fa-chevron-right me-2"></i>Adventure Travel
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('blog.category', 'nature') }}" class="text-muted">
                                        <i class="fas fa-chevron-right me-2"></i>Nature & Wildlife
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('blog.category', 'tips') }}" class="text-muted">
                                        <i class="fas fa-chevron-right me-2"></i>Travel Tips
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Newsletter Subscription -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold mb-3">Subscribe to Our Newsletter</h5>
                            <p class="text-muted mb-4">Get the latest travel stories and special offers</p>
                            @livewire('newsletter-subscription')
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- Featured Post -->
                    <div class="card border-0 shadow-sm overflow-hidden mb-5" data-aos="fade-up">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('img/20240524_152758kk.jpg') }}" alt="Featured Blog Post"
                                class="card-img-top">
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <span class="badge bg-primary me-2">Travel Guide</span>
                                <span class="text-muted">May 15, 2025</span>
                            </div>
                            <h2 class="h3 fw-bold mb-3">Exploring the Wakhan Corridor: A Journey Through Afghanistan's
                                Hidden Valley</h2>
                            <p class="text-muted mb-4">Discover one of Afghanistan's most remote and breathtaking regions,
                                where ancient traditions meet stunning natural beauty.</p>
                            <a href="{{ route('blog.post', 'exploring-wakhan-corridor') }}" class="btn btn-primary">
                                Read More
                            </a>
                        </div>
                    </div>

                    <!-- Blog Post Grid -->
                    <div class="row g-4">
                        <!-- Blog Post 1 -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card border-0 shadow-sm h-100">
                                <img src="{{ asset('img/20240924_093643.jpg') }}" alt="Blog Post 1" class="card-img-top">
                                <div class="card-body p-4">
                                    <div class="d-flex mb-3">
                                        <span class="badge bg-primary me-2">History</span>
                                        <span class="text-muted">April 20, 2025</span>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3">The Ancient Buddhas of Bamiyan: A Story of
                                        Resilience</h5>
                                    <p class="card-text text-muted mb-4">Explore the history and cultural significance of
                                        Afghanistan's iconic Bamiyan Valley.</p>
                                    <a href="{{ route('blog.post', 'bamiyan-buddhas') }}"
                                        class="btn btn-outline-primary btn-sm">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 2 -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="card border-0 shadow-sm h-100">
                                <img src="{{ asset('img/20241231_222751.jpg') }}" alt="Blog Post 2" class="card-img-top">
                                <div class="card-body p-4">
                                    <div class="d-flex mb-3">
                                        <span class="badge bg-primary me-2">Culture</span>
                                        <span class="text-muted">April 18, 2025</span>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3">Celebrating Nowruz: Afghanistan's New Year Festival
                                    </h5>
                                    <p class="card-text text-muted mb-4">Experience the vibrant traditions and celebrations
                                        of the Persian New Year in Afghanistan.</p>
                                    <a href="{{ route('blog.post', 'nowruz-celebrations') }}"
                                        class="btn btn-outline-primary btn-sm">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 3 -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="card border-0 shadow-sm h-100">
                                <img src="{{ asset('img/20240524_152758kk.jpg') }}" alt="Blog Post 3" class="card-img-top">
                                <div class="card-body p-4">
                                    <div class="d-flex mb-3">
                                        <span class="badge bg-primary me-2">Adventure</span>
                                        <span class="text-muted">April 10, 2025</span>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3">Trekking in the Hindu Kush: A Guide to
                                        Afghanistan's Mountain Adventures</h5>
                                    <p class="card-text text-muted mb-4">Discover the best hiking trails and mountain
                                        experiences in Afghanistan's majestic Hindu Kush range.</p>
                                    <a href="{{ route('blog.post', 'hindu-kush-trekking') }}"
                                        class="btn btn-outline-primary btn-sm">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 4 -->
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="800">
                            <div class="card border-0 shadow-sm h-100">
                                <img src="{{ asset('img/20240924_093643.jpg') }}" alt="Blog Post 4"
                                    class="card-img-top">
                                <div class="card-body p-4">
                                    <div class="d-flex mb-3">
                                        <span class="badge bg-primary me-2">Travel Tips</span>
                                        <span class="text-muted">April 5, 2025</span>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3">10 Essential Tips for First-Time Travelers to
                                        Afghanistan</h5>
                                    <p class="card-text text-muted mb-4">Practical advice and cultural insights for your
                                        first visit to Afghanistan.</p>
                                    <a href="{{ route('blog.post', 'afghanistan-travel-tips') }}"
                                        class="btn btn-outline-primary btn-sm">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-5">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
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
