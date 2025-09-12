@extends('homepage-layout')

@section('title', 'Afghanistan Tourism - Contact Us')

@section('content')
    <!-- Contact Hero Section -->
    <section class="py-5">
        <div class="container text-center">
            <h1 class="display-5 fw-bold mb-4" data-aos="fade-up">Contact Us</h1>
            <p class="lead text-muted mb-5" data-aos="fade-up" data-aos-delay="200">
                Have questions about your Afghanistan trip? We're here to help!
            </p>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <!-- Contact Information -->
                    <div class="mb-5" data-aos="fade-up">
                        <h2 class="h4 fw-bold mb-4">Get in Touch</h2>
                        <p class="text-muted mb-4">We're here to help you plan your perfect trip to Afghanistan. Fill out
                            the form below and we'll get back to you as soon as possible.</p>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <i class="fas fa-map-marker-alt fa-lg text-primary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Address</h5>
                                <p class="text-muted mb-0">Kabul, Afghanistan</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <i class="fas fa-phone fa-lg text-primary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Phone</h5>
                                <p class="text-muted mb-0">+93 123 456 789</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <i class="fas fa-envelope fa-lg text-primary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Email</h5>
                                <p class="text-muted mb-0">info@afghanistantourism.com</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="me-3">
                                <i class="fas fa-clock fa-lg text-primary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Business Hours</h5>
                                <p class="text-muted mb-0">Monday - Friday: 9am - 5pm (GMT+4:30)</p>
                            </div>
                        </div>
                    </div>

                    <!-- Google Map -->
                    <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="h4 fw-bold mb-4">Our Location</h2>
                        <div class="ratio ratio-4x3 rounded-3 overflow-hidden">
                            <!-- In a real application, this would be an embedded Google Map -->
                            <div class="w-100 bg-white d-flex align-items-center justify-content-center">
                                <p class="text-muted mb-0">Map would be displayed here</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Contact Form -->
                    <div class="card border-0 shadow-sm p-4 mb-5" data-aos="fade-up">
                        <h2 class="h4 fw-bold mb-4">Send Us a Message</h2>
                        @livewire('contact-form')
                    </div>

                    <!-- FAQ Section -->
                    <div data-aos="fade-up" data-aos-delay="200">
                        <h2 class="h4 fw-bold mb-4">Frequently Asked Questions</h2>

                        <!-- FAQ Item 1 -->
                        <div class="mb-4">
                            <h5 class="fw-bold mb-3">Is it safe to travel to Afghanistan?</h5>
                            <p class="text-muted">Safety is our top priority. We only recommend destinations that are safe
                                for tourists and provide expert guides to ensure your security throughout your journey.</p>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="mb-4">
                            <h5 class="fw-bold mb-3">What's the best time to visit Afghanistan?</h5>
                            <p class="text-muted">The best time to visit Afghanistan is from March to October when the
                                weather is more temperate and most regions are accessible.</p>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="mb-4">
                            <h5 class="fw-bold mb-3">Do I need a visa to visit Afghanistan?</h5>
                            <p class="text-muted">Yes, most visitors require a visa. We can assist you with the visa
                                application process as part of our travel services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add AOS library -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>
@endsection

@section('scripts')
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Handle form submission with SweetAlert
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(this);

            // Submit form via fetch
            fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Message Sent!',
                            text: 'Thank you for contacting us. We will get back to you soon.',
                            confirmButtonText: 'OK'
                        });
                        // Reset form
                        document.getElementById('contactForm').reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong. Please try again.',
                            confirmButtonText: 'OK'
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong. Please try again.',
                        confirmButtonText: 'OK'
                    });
                });
        });

        // Show success message if it exists in session
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
@endsection
