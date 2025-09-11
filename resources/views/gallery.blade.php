@extends('homepage-layout')

@section('title', 'Afghanistan Tourism - Photo and Video Gallery')

@section('content')
    <!-- Gallery Hero Section -->
    <section class="py-5">
        <div class="container text-center">
            <h1 class="display-5 fw-bold mb-4" data-aos="fade-up">Gallery</h1>
            <p class="lead text-muted mb-5" data-aos="fade-up" data-aos-delay="200">
                Explore our collection of photos and videos showcasing Afghanistan's beauty
            </p>

            <!-- Filter Buttons -->
            <div class="btn-group mb-5" role="group" data-aos="fade-up" data-aos-delay="400">
                <button type="button" class="btn btn-primary active" data-filter="all">All</button>
                <button type="button" class="btn btn-outline-primary" data-filter="photos">Photos</button>
                <button type="button" class="btn btn-outline-primary" data-filter="videos">Videos</button>
                <button type="button" class="btn btn-outline-primary" data-filter="landscape">Landscapes</button>
                <button type="button" class="btn btn-outline-primary" data-filter="people">People</button>
                <button type="button" class="btn btn-outline-primary" data-filter="architecture">Architecture</button>
            </div>
        </div>
    </section>

    <!-- Filterable Gallery -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row g-4" id="gallery-container">
                <!-- Gallery Item 1 -->
                <div class="col-md-6 col-lg-4" data-category="photos landscape">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('img/1716635911147.jpg') }}" alt="Bamiyan Valley" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Bamiyan Valley</h5>
                            <p class="card-text text-muted">The ancient Buddhas of Bamiyan in the stunning valley landscape.
                            </p>
                            <a href="{{ asset('img/1716635911147.jpg') }}" data-lightbox="gallery"
                                data-title="Bamiyan Valley">
                                <i class="fas fa-eye me-2"></i>View Full Size
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="col-md-6 col-lg-4" data-category="videos">
                    <div class="card border-0 shadow-sm">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/1234567890" title="Afghanistan Tourism Video"
                                allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Band-e-Amir Lakes</h5>
                            <p class="card-text text-muted">Experience the beauty of Afghanistan's famous Band-e-Amir lakes.
                            </p>
                            <a href="https://www.youtube.com/watch?v=1234567890" target="_blank">
                                <i class="fas fa-play-circle me-2"></i>Watch Video
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="col-md-6 col-lg-4" data-category="photos architecture">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('img/20240524_152758kk.jpg') }}" alt="Historic Building" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Herat Citadel</h5>
                            <p class="card-text text-muted">One of Afghanistan's most iconic historical landmarks.</p>
                            <a href="{{ asset('img/20240524_152758kk.jpg') }}" data-lightbox="gallery"
                                data-title="Herat Citadel">
                                <i class="fas fa-eye me-2"></i>View Full Size
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="col-md-6 col-lg-4" data-category="photos people">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('img/20240524_152758kk.jpg') }}" alt="Local Culture" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Afghan Culture</h5>
                            <p class="card-text text-muted">Traditional dance and celebration in Afghanistan.</p>
                            <a href="{{ asset('img/20240524_152758kk.jpg') }}" data-lightbox="gallery"
                                data-title="Afghan Culture">
                                <i class="fas fa-eye me-2"></i>View Full Size
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="col-md-6 col-lg-4" data-category="photos landscape">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('img/20240924_093643.jpg') }}" alt="Mountain View" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Hindu Kush Mountains</h5>
                            <p class="card-text text-muted">Stunning mountain views from the heart of Afghanistan.</p>
                            <a href="{{ asset('img/20240924_093643.jpg') }}" data-lightbox="gallery"
                                data-title="Mountain View">
                                <i class="fas fa-eye me-2"></i>View Full Size
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="col-md-6 col-lg-4" data-category="photos architecture">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('img/20241231_222751.jpg') }}" alt="Minaret of Jam" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Minaret of Jam</h5>
                            <p class="card-text text-muted">The beautiful Minaret of Jam, a UNESCO World Heritage Site.</p>
                            <a href="{{ asset('img/20241231_222751.jpg') }}" data-lightbox="gallery"
                                data-title="Minaret of Jam">
                                <i class="fas fa-eye me-2"></i>View Full Size
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>
        // Initialize lightbox
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });

        // Filter functionality
        document.querySelectorAll('[data-filter]').forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');
                const items = document.querySelectorAll('#gallery-container [data-category]');

                items.forEach(item => {
                    item.style.display = (filter === 'all' || item.getAttribute('data-category')
                        .includes(filter)) ? 'block' : 'none';
                });

                // Update active button
                document.querySelectorAll('[data-filter]').forEach(btn => {
                    btn.classList.remove('active');
                    if (btn.getAttribute('data-filter') === filter) {
                        btn.classList.add('active');
                    }
                });
            });
        });
    </script>
@endsection
