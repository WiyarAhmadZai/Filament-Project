@extends('bootstrap-layout')

@section('title', 'Bamiyan Valley - Afghanistan Tourism')

@section('content')
    <div class="container py-5">
        <div class="mx-auto" style="max-width: 1200px;">
            <!-- Breadcrumb -->
            <nav class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/places">Places</a>
                    </li>
                    <li class="breadcrumb-item active">Bamiyan Valley</li>
                </ol>
            </nav>

            <!-- Place Header -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="position-relative">
                    <div class="ratio ratio-21x9 bg-primary">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <i class="fas fa-mountain text-white fs-1"></i>
                        </div>
                    </div>
                    <div class="position-absolute top-0 end-0 m-4">
                        <button class="btn btn-light rounded-circle">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="position-absolute bottom-0 start-0 m-4 text-white">
                        <h1 class="display-5 fw-bold mb-2">Bamiyan Valley</h1>
                        <p class="h5">
                            <i class="fas fa-map-marker-alt me-2"></i> Bamiyan Province, Afghanistan
                        </p>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <span class="badge bg-light text-primary me-3">
                                Historical Site
                            </span>
                            <span class="text-warning me-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-muted ms-1">(4.5)</span>
                            </span>
                            <span class="text-muted">
                                <i class="fas fa-comment me-1"></i> 42 reviews
                            </span>
                        </div>

                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-primary fs-4 me-4">$150/day</span>
                            <a href="/bookings/create?place=bamiyan-valley" class="btn btn-primary btn-lg">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Gallery -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h2 class="mb-4">Gallery</h2>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="ratio ratio-16x9 bg-primary rounded">
                                        <div class="d-flex align-items-center justify-content-center h-100">
                                            <i class="fas fa-camera text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ratio ratio-16x9 bg-success rounded">
                                        <div class="d-flex align-items-center justify-content-center h-100">
                                            <i class="fas fa-camera text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ratio ratio-16x9 bg-purple rounded">
                                        <div class="d-flex align-items-center justify-content-center h-100">
                                            <i class="fas fa-camera text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ratio ratio-16x9 bg-danger rounded">
                                        <div class="d-flex align-items-center justify-content-center h-100">
                                            <i class="fas fa-play text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ratio ratio-16x9 bg-warning rounded">
                                        <div class="d-flex align-items-center justify-content-center h-100">
                                            <i class="fas fa-camera text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ratio ratio-16x9 bg-info rounded">
                                        <div class="d-flex align-items-center justify-content-center h-100">
                                            <i class="fas fa-camera text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h2 class="mb-4">About Bamiyan Valley</h2>
                            <p class="text-muted mb-3">
                                The Bamiyan Valley is a UNESCO World Heritage site located in the central highlands of
                                Afghanistan.
                                It is renowned for its cultural landscape and the remains of the monumental statues of
                                Buddha,
                                which were tragically destroyed in 2001 but continue to be a symbol of Afghanistan's rich
                                heritage.
                            </p>
                            <p class="text-muted mb-3">
                                The valley is home to numerous caves and niches carved into the cliffs, many of which
                                contain
                                ancient Buddhist murals and manuscripts. The site represents a unique artistic and religious
                                fusion of Gandharan, Sassanian, and Hellenistic influences.
                            </p>
                            <p class="text-muted mb-0">
                                Today, the Bamiyan Valley is a place of pilgrimage for people from around the world,
                                not only for its historical significance but also for its breathtaking natural beauty.
                                The valley is surrounded by the Hindu Kush mountains, offering spectacular views and
                                opportunities for trekking and cultural exploration.
                            </p>
                        </div>
                    </div>

                    <!-- Reviews -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h2 class="mb-0">Visitor Reviews</h2>
                                <button class="btn btn-primary">
                                    Write a Review
                                </button>
                            </div>

                            <div>
                                <!-- Review 1 -->
                                <div class="border-bottom border-light pb-4 mb-4">
                                    <div class="d-flex">
                                        <img src="https://ui-avatars.com/api/?name=John+Doe" class="rounded-circle me-3"
                                            width="50" height="50" alt="John Doe">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-bold me-3 mb-1">John Doe</h5>
                                                <span class="text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="text-muted small mb-2">Visited in June 2023</p>
                                            <p class="text-muted mb-0">
                                                An absolutely incredible experience! The Bamiyan Valley exceeded all my
                                                expectations.
                                                The landscapes are breathtaking, and the local people were incredibly
                                                welcoming.
                                                A must-visit destination for anyone interested in history and culture.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review 2 -->
                                <div class="border-bottom border-light pb-4 mb-4">
                                    <div class="d-flex">
                                        <img src="https://ui-avatars.com/api/?name=Sarah+Smith" class="rounded-circle me-3"
                                            width="50" height="50" alt="Sarah Smith">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-bold me-3 mb-1">Sarah Smith</h5>
                                                <span class="text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </span>
                                            </div>
                                            <p class="text-muted small mb-2">Visited in March 2023</p>
                                            <p class="text-muted mb-0">
                                                The Bamiyan Valley is a place of profound beauty and historical
                                                significance.
                                                While the journey can be challenging, the experience is absolutely worth it.
                                                The views of the valley from the cliffs are unforgettable.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review 3 -->
                                <div>
                                    <div class="d-flex">
                                        <img src="https://ui-avatars.com/api/?name=Ahmad+Khan" class="rounded-circle me-3"
                                            width="50" height="50" alt="Ahmad Khan">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-bold me-3 mb-1">Ahmad Khan</h5>
                                                <span class="text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="text-muted small mb-2">Visited in October 2022</p>
                                            <p class="text-muted mb-0">
                                                As a local, I'm proud to see tourists visiting our beautiful valley.
                                                The tourism infrastructure is improving, and visitors are treated with great
                                                hospitality.
                                                I recommend hiring a local guide to fully appreciate the history of this
                                                place.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Booking Widget -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h2 class="mb-4">Book Your Visit</h2>
                            <form>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Select Date</label>
                                    <input type="date" id="date" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="duration" class="form-label">Duration</label>
                                    <select id="duration" class="form-select">
                                        <option>1 Day</option>
                                        <option>2 Days</option>
                                        <option>3 Days</option>
                                        <option>1 Week</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="guests" class="form-label">Number of Guests</label>
                                    <input type="number" id="guests" min="1" value="1"
                                        class="form-control">
                                </div>

                                <div class="pt-2">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Check Availability
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h2 class="mb-4">Location</h2>
                            <div class="ratio ratio-16x9 bg-primary rounded mb-3">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <i class="fas fa-map-marked-alt text-white"></i>
                                </div>
                            </div>
                            <p class="text-muted mb-0">
                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                Bamiyan Province, Afghanistan
                            </p>
                        </div>
                    </div>

                    <!-- Guides -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="mb-4">Recommended Guides</h2>
                            <div>
                                <div class="d-flex align-items-center p-3 border rounded mb-3">
                                    <img src="https://ui-avatars.com/api/?name=Ali+Ahmadi" class="rounded-circle me-3"
                                        width="50" height="50" alt="Ali Ahmadi">
                                    <div>
                                        <h5 class="fw-bold mb-1">Ali Ahmadi</h5>
                                        <p class="text-muted mb-0 small">
                                            <i class="fas fa-star text-warning"></i> 4.8 (24 reviews)
                                        </p>
                                    </div>
                                    <a href="/guides/ali-ahmadi" class="ms-auto text-primary">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>

                                <div class="d-flex align-items-center p-3 border rounded">
                                    <img src="https://ui-avatars.com/api/?name=Fatima+Khan" class="rounded-circle me-3"
                                        width="50" height="50" alt="Fatima Khan">
                                    <div>
                                        <h5 class="fw-bold mb-1">Fatima Khan</h5>
                                        <p class="text-muted mb-0 small">
                                            <i class="fas fa-star text-warning"></i> 4.9 (32 reviews)
                                        </p>
                                    </div>
                                    <a href="/guides/fatima-khan" class="ms-auto text-primary">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
