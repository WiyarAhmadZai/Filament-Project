@extends('bootstrap-layout')

@section('title', 'Tour Guides in Afghanistan - Afghanistan Tourism')

@section('content')
    <div class="container py-5">
        <div class="mb-5 text-center animate-on-scroll">
            <h1 class="display-5 fw-bold text-dark mb-3">Find Your Perfect Guide</h1>
            <p class="lead text-muted">
                Connect with experienced local guides who will enhance your Afghan adventure with their knowledge and
                expertise
            </p>
        </div>

        <!-- Search and Filter -->
        <div class="card border-0 shadow-sm mb-5 animate-on-scroll">
            <div class="card-body p-4">
                <div class="row g-3">
                    <div class="col-md-2">
                        <label for="location" class="form-label">Location</label>
                        <select id="location" class="form-select">
                            <option>All Locations</option>
                            <option>Kabul</option>
                            <option>Bamiyan</option>
                            <option>Herat</option>
                            <option>Mazar-i-Sharif</option>
                            <option>Jalalabad</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="language" class="form-label">Language</label>
                        <select id="language" class="form-select">
                            <option>Any Language</option>
                            <option>English</option>
                            <option>Dari</option>
                            <option>Pashto</option>
                            <option>French</option>
                            <option>German</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="specialty" class="form-label">Specialty</label>
                        <select id="specialty" class="form-select">
                            <option>All Specialties</option>
                            <option>Historical Sites</option>
                            <option>Natural Landscapes</option>
                            <option>Cultural Experiences</option>
                            <option>Adventure Activities</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="price" class="form-label">Price Range</label>
                        <select id="price" class="form-select">
                            <option>Any Price</option>
                            <option>Under $50/day</option>
                            <option>$50 - $100/day</option>
                            <option>$100 - $150/day</option>
                            <option>Over $150/day</option>
                        </select>
                    </div>

                    <div class="col-md-4 d-flex align-items-end">
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-search me-2"></i> Search
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Guides Grid -->
        <div class="row g-4">
            <!-- Guide 1 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-primary">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-user text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-primary">
                                <i class="fas fa-medal me-1"></i> Top Guide
                            </span>
                        </div>
                        <div class="position-absolute start-0 translate-middle-y ms-4">
                            <img src="https://ui-avatars.com/api/?name=Ali+Ahmadi&size=128"
                                class="rounded-circle border border-4 border-white" width="80" height="80"
                                alt="Ali Ahmadi">
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h5 class="fw-bold mb-1">Ali Ahmadi</h5>
                                <p class="text-muted small mb-2">Bamiyan & Kabul Expert</p>
                            </div>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                                <span class="text-muted small d-block text-end">(4.8)</span>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light text-primary">English</span>
                            <span class="badge bg-light text-success">Dari</span>
                            <span class="badge bg-light text-purple">Pashto</span>
                        </div>

                        <div class="mb-4">
                            <p class="text-muted small mb-1">
                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                Bamiyan, Afghanistan
                            </p>
                            <p class="text-muted small mb-0">
                                <i class="fas fa-clock text-primary me-2"></i>
                                8 years experience
                            </p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$80/day</span>
                            <a href="/guides/ali-ahmadi" class="btn btn-primary btn-sm">
                                View Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guide 2 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-success">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-user text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute start-0 translate-middle-y ms-4">
                            <img src="https://ui-avatars.com/api/?name=Fatima+Khan&size=128"
                                class="rounded-circle border border-4 border-white" width="80" height="80"
                                alt="Fatima Khan">
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h5 class="fw-bold mb-1">Fatima Khan</h5>
                                <p class="text-muted small mb-2">Herat & Western Afghanistan</p>
                            </div>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <span class="text-muted small d-block text-end">(5.0)</span>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light text-primary">English</span>
                            <span class="badge bg-light text-success">Dari</span>
                            <span class="badge bg-light text-danger">French</span>
                        </div>

                        <div class="mb-4">
                            <p class="text-muted small mb-1">
                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                Herat, Afghanistan
                            </p>
                            <p class="text-muted small mb-0">
                                <i class="fas fa-clock text-primary me-2"></i>
                                12 years experience
                            </p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$100/day</span>
                            <a href="/guides/fatima-khan" class="btn btn-primary btn-sm">
                                View Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guide 3 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-purple">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-user text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute start-0 translate-middle-y ms-4">
                            <img src="https://ui-avatars.com/api/?name=Hassan+Rahimi&size=128"
                                class="rounded-circle border border-4 border-white" width="80" height="80"
                                alt="Hassan Rahimi">
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h5 class="fw-bold mb-1">Hassan Rahimi</h5>
                                <p class="text-muted small mb-2">Northern Afghanistan</p>
                            </div>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                                <span class="text-muted small d-block text-end">(4.2)</span>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light text-primary">English</span>
                            <span class="badge bg-light text-success">Dari</span>
                            <span class="badge bg-light text-warning">German</span>
                        </div>

                        <div class="mb-4">
                            <p class="text-muted small mb-1">
                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                Mazar-i-Sharif, Afghanistan
                            </p>
                            <p class="text-muted small mb-0">
                                <i class="fas fa-clock text-primary me-2"></i>
                                6 years experience
                            </p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$70/day</span>
                            <a href="/guides/hassan-rahimi" class="btn btn-primary btn-sm">
                                View Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guide 4 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-danger">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-user text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute start-0 translate-middle-y ms-4">
                            <img src="https://ui-avatars.com/api/?name=Zahra+Noori&size=128"
                                class="rounded-circle border border-4 border-white" width="80" height="80"
                                alt="Zahra Noori">
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h5 class="fw-bold mb-1">Zahra Noori</h5>
                                <p class="text-muted small mb-2">Eastern Afghanistan</p>
                            </div>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                                <span class="text-muted small d-block text-end">(4.7)</span>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light text-primary">English</span>
                            <span class="badge bg-light text-success">Dari</span>
                            <span class="badge bg-light text-purple">Pashto</span>
                        </div>

                        <div class="mb-4">
                            <p class="text-muted small mb-1">
                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                Jalalabad, Afghanistan
                            </p>
                            <p class="text-muted small mb-0">
                                <i class="fas fa-clock text-primary me-2"></i>
                                10 years experience
                            </p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$90/day</span>
                            <a href="/guides/zahra-noori" class="btn btn-primary btn-sm">
                                View Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guide 5 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-warning">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-user text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute start-0 translate-middle-y ms-4">
                            <img src="https://ui-avatars.com/api/?name=Karim+Farid&size=128"
                                class="rounded-circle border border-4 border-white" width="80" height="80"
                                alt="Karim Farid">
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h5 class="fw-bold mb-1">Karim Farid</h5>
                                <p class="text-muted small mb-2">Central Afghanistan</p>
                            </div>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                                <span class="text-muted small d-block text-end">(4.3)</span>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light text-primary">English</span>
                            <span class="badge bg-light text-success">Dari</span>
                        </div>

                        <div class="mb-4">
                            <p class="text-muted small mb-1">
                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                Kabul, Afghanistan
                            </p>
                            <p class="text-muted small mb-0">
                                <i class="fas fa-clock text-primary me-2"></i>
                                7 years experience
                            </p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$75/day</span>
                            <a href="/guides/karim-farid" class="btn btn-primary btn-sm">
                                View Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Guide 6 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-info">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-user text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute start-0 translate-middle-y ms-4">
                            <img src="https://ui-avatars.com/api/?name=Nadia+Azimi&size=128"
                                class="rounded-circle border border-4 border-white" width="80" height="80"
                                alt="Nadia Azimi">
                        </div>
                    </div>
                    <div class="card-body pt-5">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h5 class="fw-bold mb-1">Nadia Azimi</h5>
                                <p class="text-muted small mb-2">Southern Afghanistan</p>
                            </div>
                            <div>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                                <span class="text-muted small d-block text-end">(4.6)</span>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light text-primary">English</span>
                            <span class="badge bg-light text-success">Dari</span>
                            <span class="badge bg-light text-purple">Pashto</span>
                            <span class="badge bg-light text-danger">French</span>
                        </div>

                        <div class="mb-4">
                            <p class="text-muted small mb-1">
                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                Kandahar, Afghanistan
                            </p>
                            <p class="text-muted small mb-0">
                                <i class="fas fa-clock text-primary me-2"></i>
                                9 years experience
                            </p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$85/day</span>
                            <a href="/guides/nadia-azimi" class="btn btn-primary btn-sm">
                                View Profile
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
