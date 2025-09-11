@extends('bootstrap-layout')

@section('title', 'Tourist Places in Afghanistan - Afghanistan Tourism')

@section('content')
    <div class="container py-5">
        <div class="mb-5 text-center animate-on-scroll">
            <h1 class="display-5 fw-bold text-dark mb-3">Discover Afghanistan</h1>
            <p class="lead text-muted">
                Explore the breathtaking beauty of Afghanistan through our curated collection of tourist destinations
            </p>
        </div>

        <!-- Search and Filter -->
        <div class="card border-0 shadow-sm mb-5 animate-on-scroll">
            <div class="card-body p-4">
                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="region" class="form-label">Region</label>
                        <select id="region" class="form-select">
                            <option>All Regions</option>
                            <option>Kabul</option>
                            <option>Bamiyan</option>
                            <option>Herat</option>
                            <option>Mazar-i-Sharif</option>
                            <option>Jalalabad</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="category" class="form-label">Category</label>
                        <select id="category" class="form-select">
                            <option>All Categories</option>
                            <option>Historical Sites</option>
                            <option>Natural Landscapes</option>
                            <option>Cultural Experiences</option>
                            <option>Adventure Activities</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="price" class="form-label">Price Range</label>
                        <select id="price" class="form-select">
                            <option>Any Price</option>
                            <option>Under $100</option>
                            <option>$100 - $300</option>
                            <option>$300 - $500</option>
                            <option>Over $500</option>
                        </select>
                    </div>

                    <div class="col-md-3 d-flex align-items-end">
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-search me-2"></i> Search
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Places Grid -->
        <div class="row g-4">
            <!-- Place 1 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-primary">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-mountain text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-light text-primary">
                                <i class="fas fa-heart me-1"></i> 124
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3 text-white">
                            <h5 class="fw-bold mb-1">Bamiyan Valley</h5>
                            <p class="mb-0 small"><i class="fas fa-map-marker-alt me-1"></i> Bamiyan</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-light text-primary">Historical Site</span>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                                <span class="text-muted small ms-1">(4.5)</span>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            Home to the ancient Buddhas and stunning valley landscapes. A UNESCO World Heritage site.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$150/day</span>
                            <a href="/places/bamiyan-valley" class="text-primary text-decoration-none">
                                Explore <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Place 2 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-success">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-water text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-light text-success">
                                <i class="fas fa-heart me-1"></i> 98
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3 text-white">
                            <h5 class="fw-bold mb-1">Band-e-Amir</h5>
                            <p class="mb-0 small"><i class="fas fa-map-marker-alt me-1"></i> Bamyan</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-light text-success">Natural Landscape</span>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                                <span class="text-muted small ms-1">(4.0)</span>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            Six spectacular deep blue lakes separated by natural travertine dams.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$120/day</span>
                            <a href="/places/band-e-amir" class="text-primary text-decoration-none">
                                Explore <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Place 3 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-purple">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-archway text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-light text-purple">
                                <i class="fas fa-heart me-1"></i> 87
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3 text-white">
                            <h5 class="fw-bold mb-1">Minaret of Jam</h5>
                            <p class="mb-0 small"><i class="fas fa-map-marker-alt me-1"></i> Herat</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-light text-purple">Historical Site</span>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                                <span class="text-muted small ms-1">(4.3)</span>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            A UNESCO World Heritage site and one of the finest examples of Islamic architecture.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$100/day</span>
                            <a href="/places/minaret-of-jam" class="text-primary text-decoration-none">
                                Explore <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Place 4 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-danger">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-city text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-light text-danger">
                                <i class="fas fa-heart me-1"></i> 156
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3 text-white">
                            <h5 class="fw-bold mb-1">Kabul Old City</h5>
                            <p class="mb-0 small"><i class="fas fa-map-marker-alt me-1"></i> Kabul</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-light text-danger">Cultural Experience</span>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                                <span class="text-muted small ms-1">(4.0)</span>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            Explore the historic heart of Kabul with its traditional bazaars and ancient architecture.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$80/day</span>
                            <a href="/places/kabul-old-city" class="text-primary text-decoration-none">
                                Explore <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Place 5 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-warning">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-tree text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-light text-warning">
                                <i class="fas fa-heart me-1"></i> 72
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3 text-white">
                            <h5 class="fw-bold mb-1">Shah-Do Shamshira</h5>
                            <p class="mb-0 small"><i class="fas fa-map-marker-alt me-1"></i> Kabul</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-light text-warning">Adventure Activity</span>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                                <span class="text-muted small ms-1">(3.8)</span>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            A beautiful valley just outside Kabul, perfect for hiking and picnics with stunning views.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$60/day</span>
                            <a href="/places/shah-do-shamshira" class="text-primary text-decoration-none">
                                Explore <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Place 6 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-info">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-mosque text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-light text-info">
                                <i class="fas fa-heart me-1"></i> 93
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3 text-white">
                            <h5 class="fw-bold mb-1">Blue Mosque</h5>
                            <p class="mb-0 small"><i class="fas fa-map-marker-alt me-1"></i> Mazar-i-Sharif</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-light text-info">Historical Site</span>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <span class="text-muted small ms-1">(5.0)</span>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            A stunning 15th-century mosque with beautiful blue-tiled architecture and intricate designs.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$75/day</span>
                            <a href="/places/blue-mosque" class="text-primary text-decoration-none">
                                Explore <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-5 d-flex justify-content-center">
            <nav>
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">Previous</a>
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
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
