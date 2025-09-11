@extends('bootstrap-layout')

@section('title', 'Ali Ahmadi - Tour Guide in Afghanistan')

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
                        <a href="/guides">Guides</a>
                    </li>
                    <li class="breadcrumb-item active">Ali Ahmadi</li>
                </ol>
            </nav>

            <!-- Guide Profile Header -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="position-relative">
                    <div class="ratio ratio-21x9 bg-primary">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <i class="fas fa-user text-white fs-1"></i>
                        </div>
                    </div>
                    <div class="position-absolute top-0 end-0 m-4">
                        <span class="badge bg-primary">
                            <i class="fas fa-medal me-1"></i> Top Guide
                        </span>
                    </div>
                    <div class="position-absolute start-0 translate-middle-y ms-4">
                        <img src="https://ui-avatars.com/api/?name=Ali+Ahmadi&size=128"
                            class="rounded-circle border border-4 border-white" width="100" height="100"
                            alt="Ali Ahmadi">
                    </div>
                </div>

                <div class="card-body pt-5">
                    <div class="d-flex flex-wrap justify-content-between align-items-start">
                        <div>
                            <h1 class="display-6 fw-bold text-dark">Ali Ahmadi</h1>
                            <p class="text-muted h5">Professional Tour Guide in Bamiyan & Kabul</p>
                            <div class="d-flex align-items-center mt-2">
                                <span class="text-warning me-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </span>
                                <span class="text-muted">(4.8) • 124 reviews</span>
                            </div>
                        </div>

                        <div class="mt-4 mt-md-0">
                            <div class="d-flex align-items-center">
                                <span class="fw-bold text-primary fs-4 me-4">$80/day</span>
                                <a href="/bookings/create?guide=ali-ahmadi" class="btn btn-primary btn-lg">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge bg-light text-primary">English</span>
                        <span class="badge bg-light text-success">Dari</span>
                        <span class="badge bg-light text-purple">Pashto</span>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- About -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h2 class="mb-4">About Me</h2>
                            <p class="text-muted mb-3">
                                Hello! I'm Ali Ahmadi, a professional tour guide with over 8 years of experience showcasing
                                the beauty and rich history of Afghanistan. I specialize in guiding visitors through the
                                breathtaking Bamiyan Valley and the historic sites of Kabul.
                            </p>
                            <p class="text-muted mb-3">
                                My passion for Afghan history and culture, combined with my fluency in English, Dari, and
                                Pashto,
                                allows me to provide an enriching experience for international visitors. I believe that
                                understanding
                                the stories behind each site makes the journey truly memorable.
                            </p>
                            <p class="text-muted mb-0">
                                Whether you're interested in ancient Buddhist heritage, Islamic architecture, or simply want
                                to
                                experience the warm hospitality of Afghan people, I'm here to make your visit unforgettable.
                            </p>
                        </div>
                    </div>

                    <!-- Specialties -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h2 class="mb-4">My Specialties</h2>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="border rounded p-3 h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="bg-primary bg-opacity-10 rounded p-2 text-primary me-3">
                                                <i class="fas fa-landmark"></i>
                                            </div>
                                            <h5 class="fw-bold mb-0">Historical Sites</h5>
                                        </div>
                                        <p class="text-muted small mb-0">
                                            Expert knowledge of Afghanistan's ancient history, including Buddhist heritage
                                            sites and
                                            Islamic monuments.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="border rounded p-3 h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="bg-success bg-opacity-10 rounded p-2 text-success me-3">
                                                <i class="fas fa-mountain"></i>
                                            </div>
                                            <h5 class="fw-bold mb-0">Natural Landscapes</h5>
                                        </div>
                                        <p class="text-muted small mb-0">
                                            Guided tours through Afghanistan's stunning mountain ranges, valleys, and
                                            pristine
                                            natural environments.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="border rounded p-3 h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="bg-purple bg-opacity-10 rounded p-2 text-purple me-3">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <h5 class="fw-bold mb-0">Cultural Experiences</h5>
                                        </div>
                                        <p class="text-muted small mb-0">
                                            Immersive experiences in Afghan culture, including traditional crafts, music,
                                            and local
                                            cuisine.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="border rounded p-3 h-100">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="bg-warning bg-opacity-10 rounded p-2 text-warning me-3">
                                                <i class="fas fa-hiking"></i>
                                            </div>
                                            <h5 class="fw-bold mb-0">Adventure Activities</h5>
                                        </div>
                                        <p class="text-muted small mb-0">
                                            Organized trekking, hiking, and outdoor activities in safe and scenic locations
                                            across
                                            Afghanistan.
                                        </p>
                                    </div>
                                </div>
                            </div>
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
                                            <p class="text-muted small mb-2">Visited Bamiyan with Ali in June 2023</p>
                                            <p class="text-muted mb-0">
                                                Ali was an exceptional guide! His knowledge of the Bamiyan Valley's history
                                                and
                                                culture
                                                was impressive. He made our trip truly memorable with his stories and
                                                insights.
                                                I highly recommend him to anyone visiting Afghanistan.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review 2 -->
                                <div class="border-bottom border-light pb-4 mb-4">
                                    <div class="d-flex">
                                        <img src="https://ui-avatars.com/api/?name=Sarah+Smith"
                                            class="rounded-circle me-3" width="50" height="50" alt="Sarah Smith">
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
                                            <p class="text-muted small mb-2">Visited Kabul with Ali in March 2023</p>
                                            <p class="text-muted mb-0">
                                                Ali provided an excellent tour of Kabul's historic sites. His English was
                                                perfect,
                                                and he was very knowledgeable about the city's history. He also helped us
                                                navigate
                                                the local culture with ease. A fantastic experience overall!
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review 3 -->
                                <div>
                                    <div class="d-flex">
                                        <img src="https://ui-avatars.com/api/?name=Michael+Brown"
                                            class="rounded-circle me-3" width="50" height="50"
                                            alt="Michael Brown">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-bold me-3 mb-1">Michael Brown</h5>
                                                <span class="text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="text-muted small mb-2">Visited with Ali in October 2022</p>
                                            <p class="text-muted mb-0">
                                                Ali was professional and friendly. He tailored our tour to our interests and
                                                made
                                                sure we had a safe and enjoyable experience. The stories he shared about
                                                Afghan
                                                history were fascinating. Would definitely book with him again.
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
                            <h2 class="mb-4">Book This Guide</h2>
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
                                    <label for="location" class="form-label">Preferred Location</label>
                                    <select id="location" class="form-select">
                                        <option>Bamiyan Valley</option>
                                        <option>Kabul Old City</option>
                                        <option>Band-e-Amir</option>
                                        <option>Other (Specify)</option>
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

                    <!-- Guide Info -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h2 class="mb-4">Guide Information</h2>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                    <span class="fw-medium">Based in:</span>
                                    <span class="text-muted">Bamiyan, Afghanistan</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-clock text-primary me-2"></i>
                                    <span class="fw-medium">Experience:</span>
                                    <span class="text-muted">8 years</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-language text-success me-2"></i>
                                    <span class="fw-medium">Languages:</span>
                                    <span class="text-muted">English, Dari, Pashto</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-certificate text-warning me-2"></i>
                                    <span class="fw-medium">Certifications:</span>
                                    <span class="text-muted">Afghan Tourism Board Certified</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-shield-alt text-purple me-2"></i>
                                    <span class="fw-medium">Verified:</span>
                                    <span class="text-muted">Identity & Background Check</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Guide -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="mb-4">Contact Guide</h2>
                            <p class="text-muted mb-4">
                                Have questions or special requests? Send a message to Ali directly.
                            </p>
                            <button class="btn btn-outline-primary w-100">
                                <i class="fas fa-envelope me-2"></i> Send Message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
