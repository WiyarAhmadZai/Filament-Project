@extends('bootstrap-layout')

@section('title', 'Visa Application - Afghanistan Tourism')

@section('content')
    <div class="container py-5">
        <div class="mx-auto" style="max-width: 900px;">
            <!-- Breadcrumb -->
            <nav class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/tickets">Tickets & Visas</a>
                    </li>
                    <li class="breadcrumb-item active">Visa Application</li>
                </ol>
            </nav>

            <!-- Page Header -->
            <div class="card border-0 shadow-sm mb-4 text-center">
                <div class="card-body p-4">
                    <h1 class="display-6 fw-bold text-dark mb-2">Afghanistan Tourist Visa Application</h1>
                    <p class="text-muted">
                        Complete your visa application online and get approved faster. All information is securely
                        processed.
                    </p>
                </div>
            </div>

            <!-- Application Form -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white py-3">
                    <h2 class="mb-0 h4">Visa Application Form</h2>
                    <p class="mb-0">Fill in all required information accurately</p>
                </div>

                <form class="p-4">
                    <!-- Personal Information -->
                    <div class="mb-4">
                        <h3 class="h5 fw-bold text-dark mb-3 pb-2 border-bottom">Personal Information</h3>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label">First Name *</label>
                                <input type="text" id="first_name" required class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Last Name *</label>
                                <input type="text" id="last_name" required class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="date_of_birth" class="form-label">Date of Birth *</label>
                                <input type="date" id="date_of_birth" required class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="nationality" class="form-label">Nationality *</label>
                                <select id="nationality" required class="form-select">
                                    <option value="">Select Nationality</option>
                                    <option value="US">United States</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="CA">Canada</option>
                                    <option value="AU">Australia</option>
                                    <option value="DE">Germany</option>
                                    <option value="FR">France</option>
                                    <option value="AF">Afghanistan</option>
                                    <!-- Add more countries as needed -->
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="passport_number" class="form-label">Passport Number *</label>
                                <input type="text" id="passport_number" required class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="passport_expiry" class="form-label">Passport Expiry Date *</label>
                                <input type="date" id="passport_expiry" required class="form-control">
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="mb-4">
                        <h3 class="h5 fw-bold text-dark mb-3 pb-2 border-bottom">Contact Information</h3>

                        <div class="row g-3">
                            <div class="col-12">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" id="email" required class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="tel" id="phone" required class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="alternate_phone" class="form-label">Alternate Phone Number</label>
                                <input type="tel" id="alternate_phone" class="form-control">
                            </div>
                        </div>
                    </div>

                    <!-- Travel Information -->
                    <div class="mb-4">
                        <h3 class="h5 fw-bold text-dark mb-3 pb-2 border-bottom">Travel Information</h3>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="arrival_date" class="form-label">Expected Arrival Date *</label>
                                <input type="date" id="arrival_date" required class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="departure_date" class="form-label">Expected Departure Date *</label>
                                <input type="date" id="departure_date" required class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="purpose" class="form-label">Purpose of Visit *</label>
                                <select id="purpose" required class="form-select">
                                    <option value="">Select Purpose</option>
                                    <option value="tourism">Tourism</option>
                                    <option value="business">Business</option>
                                    <option value="family">Visiting Family/Friends</option>
                                    <option value="education">Education</option>
                                    <option value="medical">Medical Treatment</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="visa_type" class="form-label">Visa Type *</label>
                                <select id="visa_type" required class="form-select">
                                    <option value="">Select Visa Type</option>
                                    <option value="single">Single Entry (30 days)</option>
                                    <option value="multiple">Multiple Entry (90 days)</option>
                                    <option value="extended">Extended Stay (180 days)</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="accommodation" class="form-label">Accommodation in Afghanistan *</label>
                                <input type="text" id="accommodation"
                                    placeholder="Hotel name or address where you'll stay" required class="form-control">
                            </div>
                        </div>
                    </div>

                    <!-- Document Upload -->
                    <div class="mb-4">
                        <h3 class="h5 fw-bold text-dark mb-3 pb-2 border-bottom">Document Upload</h3>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Passport Copy (Bio-data page) *</label>
                                <div class="border rounded p-3 text-center">
                                    <i class="fas fa-passport text-muted fs-1 mb-2"></i>
                                    <div class="mb-2">
                                        <input type="file" class="form-control" id="passport_copy" required>
                                    </div>
                                    <small class="text-muted">PDF, JPG, PNG up to 5MB</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Passport-sized Photo *</label>
                                <div class="border rounded p-3 text-center">
                                    <i class="fas fa-camera text-muted fs-1 mb-2"></i>
                                    <div class="mb-2">
                                        <input type="file" class="form-control" id="photo" required>
                                    </div>
                                    <small class="text-muted">JPG, PNG up to 2MB</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Travel Itinerary</label>
                                <div class="border rounded p-3 text-center">
                                    <i class="fas fa-file-alt text-muted fs-1 mb-2"></i>
                                    <div class="mb-2">
                                        <input type="file" class="form-control" id="itinerary">
                                    </div>
                                    <small class="text-muted">PDF, DOC, DOCX up to 5MB</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Travel Insurance</label>
                                <div class="border rounded p-3 text-center">
                                    <i class="fas fa-shield-alt text-muted fs-1 mb-2"></i>
                                    <div class="mb-2">
                                        <input type="file" class="form-control" id="insurance">
                                    </div>
                                    <small class="text-muted">PDF up to 5MB</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree to the <a href="/terms">Terms and Conditions</a> and
                                    <a href="/privacy">Privacy Policy</a>. I confirm that all information
                                    provided is accurate and complete. I understand that providing false information may
                                    result
                                    in visa denial or legal consequences.
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg px-5">
                            Submit Visa Application
                        </button>
                    </div>
                </form>
            </div>

            <!-- Processing Information -->
            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body p-4">
                    <h2 class="text-center mb-4">Visa Processing Information</h2>

                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 border-primary">
                                <div class="card-body text-center">
                                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fas fa-clock text-primary fs-4"></i>
                                    </div>
                                    <h5 class="card-title">Processing Time</h5>
                                    <p class="card-text">
                                        Standard: 5-7 business days<br>
                                        Express: 2-3 business days (+$25)<br>
                                        Urgent: Same day (+$50)
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-success">
                                <div class="card-body text-center">
                                    <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fas fa-dollar-sign text-success fs-4"></i>
                                    </div>
                                    <h5 class="card-title">Visa Fees</h5>
                                    <p class="card-text">
                                        Single Entry: $50<br>
                                        Multiple Entry: $100<br>
                                        Extended Stay: $150
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-info">
                                <div class="card-body text-center">
                                    <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fas fa-question-circle text-info fs-4"></i>
                                    </div>
                                    <h5 class="card-title">Need Help?</h5>
                                    <p class="card-text">
                                        Contact our visa specialists:<br>
                                        <a href="mailto:visas@afghantourism.com">visas@afghantourism.com</a><br>
                                        <a href="tel:+93776992603">+93 776 992 603</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
