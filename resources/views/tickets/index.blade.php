@extends('bootstrap-layout')

@section('title', 'Tickets & Visas - Afghanistan Tourism')

@section('content')
    <div class="container py-5">
        <div class="mb-5 text-center">
            <h1 class="display-5 fw-bold text-dark mb-3">Travel Tickets & Visas</h1>
            <p class="lead text-muted">
                Plan your journey to Afghanistan with our comprehensive ticket and visa services
            </p>
        </div>

        <!-- Ticket/Visa Categories -->
        <div class="d-flex overflow-auto pb-3 mb-4">
            <div class="d-flex flex-nowrap gap-2">
                <a href="/tickets?category=all" class="btn btn-primary flex-shrink-0">
                    All Services
                </a>
                <a href="/tickets?category=flights" class="btn btn-outline-primary flex-shrink-0">
                    Flight Tickets
                </a>
                <a href="/tickets?category=visas" class="btn btn-outline-primary flex-shrink-0">
                    Visa Services
                </a>
                <a href="/tickets?category=insurance" class="btn btn-outline-primary flex-shrink-0">
                    Travel Insurance
                </a>
            </div>
        </div>

        <!-- Search and Filter -->
        <div class="card border-0 shadow-sm mb-5">
            <div class="card-body p-4">
                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="destination" class="form-label">Destination</label>
                        <select id="destination" class="form-select">
                            <option>All Destinations</option>
                            <option>Kabul</option>
                            <option>Herat</option>
                            <option>Mazar-i-Sharif</option>
                            <option>Jalalabad</option>
                            <option>Kandahar</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="type" class="form-label">Ticket Type</label>
                        <select id="type" class="form-select">
                            <option>All Types</option>
                            <option>One-way</option>
                            <option>Round-trip</option>
                            <option>Multi-city</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="date" class="form-label">Travel Date</label>
                        <input type="date" id="date" class="form-control">
                    </div>

                    <div class="col-md-3 d-flex align-items-end">
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-search me-2"></i> Search
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="row g-4">
            <!-- Flight Ticket Service -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-primary">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-plane text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-primary">
                                <i class="fas fa-plane me-1"></i> Flight
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3 text-white">
                            <h5 class="fw-bold">International Flights</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">
                            Book flights to Afghanistan from major international airports with competitive pricing.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">From $450</span>
                            <a href="/tickets/flights" class="btn btn-primary btn-sm">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visa Service -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-success">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-passport text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-success">
                                <i class="fas fa-passport me-1"></i> Visa
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3 text-white">
                            <h5 class="fw-bold">Tourist Visa</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">
                            Simplified visa application process for tourists visiting Afghanistan.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$50</span>
                            <a href="/tickets/visas" class="btn btn-primary btn-sm">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Travel Insurance -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-purple">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-shield-alt text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-purple">
                                <i class="fas fa-shield-alt me-1"></i> Insurance
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3 text-white">
                            <h5 class="fw-bold">Travel Insurance</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">
                            Comprehensive travel insurance coverage for your Afghan adventure.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">From $75</span>
                            <a href="/tickets/insurance" class="btn btn-primary btn-sm">
                                Get Quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visa on Arrival -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-danger">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-passport text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-danger">
                                <i class="fas fa-passport me-1"></i> Visa
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3 text-white">
                            <h5 class="fw-bold">Visa on Arrival</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">
                            Obtain your visa upon arrival at Kabul International Airport.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$100</span>
                            <a href="/tickets/visa-on-arrival" class="btn btn-primary btn-sm">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Group Visa -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-warning">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-users text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-warning">
                                <i class="fas fa-users me-1"></i> Visa
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3 text-white">
                            <h5 class="fw-bold">Group Visa</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">
                            Special visa rates for groups of 5 or more travelers.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">From $40/person</span>
                            <a href="/tickets/group-visa" class="btn btn-primary btn-sm">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Extended Stay Visa -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-info">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-passport text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-info">
                                <i class="fas fa-passport me-1"></i> Visa
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3 text-white">
                            <h5 class="fw-bold">Extended Stay Visa</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">
                            For travelers planning extended stays in Afghanistan (30+ days).
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">$150</span>
                            <a href="/tickets/extended-stay-visa" class="btn btn-primary btn-sm">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visa Information Section -->
        <div class="card border-0 shadow-sm mt-5">
            <div class="card-body p-4">
                <h2 class="text-center mb-4">Afghanistan Visa Information</h2>

                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="fw-bold mb-3">Required Documents</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Passport valid for at least 6 months
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Completed visa application form
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Passport-sized photographs (2)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Proof of accommodation in Afghanistan
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Travel itinerary
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Travel insurance certificate
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <h5 class="fw-bold mb-3">Processing Time</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fas fa-clock text-primary me-2"></i>
                                <span class="fw-medium">Standard:</span> 5-7 business days
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-bolt text-warning me-2"></i>
                                <span class="fw-medium">Express:</span> 2-3 business days (additional $25)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-exclamation-circle text-danger me-2"></i>
                                <span class="fw-medium">Urgent:</span> Same day (additional $50)
                            </li>
                        </ul>

                        <h5 class="fw-bold mt-4 mb-3">Important Notes</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fas fa-info-circle text-muted me-2"></i>
                                Visa requirements may vary by nationality
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-info-circle text-muted me-2"></i>
                                All visitors must register with local authorities within 72 hours of arrival
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-info-circle text-muted me-2"></i>
                                Extensions can be requested through the Ministry of Interior
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="/contact" class="btn btn-primary">
                        <i class="fas fa-question-circle me-2"></i> Contact Us for Visa Assistance
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
