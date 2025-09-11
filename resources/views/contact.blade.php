@extends('bootstrap-layout')

@section('title', 'Contact Us - Afghanistan Tourism')

@section('head')
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/IMG_3623.JPG') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Contact <span class="text-primary">Us</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Get in touch with our team for any inquiries about traveling to Afghanistan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-dark mb-3">Get In Touch</h2>
                <p class="lead text-muted">
                    We're here to help you plan your Afghan adventure
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-primary text-white mx-auto mb-4">
                                <i class="bi bi-envelope fs-3"></i>
                            </div>
                            <h5 class="card-title fw-bold">Email Us</h5>
                            <p class="card-text text-muted">
                                For general inquiries and information requests
                            </p>
                            <a href="mailto:mrwiyarahmadzai@gmail.com" class="btn btn-outline-primary">
                                Send Email
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-success text-white mx-auto mb-4">
                                <i class="bi bi-whatsapp fs-3"></i>
                            </div>
                            <h5 class="card-title fw-bold">WhatsApp</h5>
                            <p class="card-text text-muted">
                                For quick responses and instant communication
                            </p>
                            <a href="https://wa.me/93776992603" class="btn btn-outline-success">
                                Chat on WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon bg-info text-white mx-auto mb-4">
                                <i class="bi bi-telephone fs-3"></i>
                            </div>
                            <h5 class="card-title fw-bold">Call Us</h5>
                            <p class="card-text text-muted">
                                For immediate assistance and bookings
                            </p>
                            <a href="tel:+93776992603" class="btn btn-outline-info">
                                Call Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-8 mx-auto" data-aos="fade-up">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <h3 class="fw-bold mb-4 text-center">Send us a Message</h3>
                            <form id="contactForm" action="{{ route('feedback.store') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter your name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter your email" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            placeholder="Enter subject" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5" data-aos="fade-up">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <h3 class="fw-bold mb-4 text-center">Office Location</h3>
                            <div class="text-center">
                                <div class="feature-icon bg-primary text-white mx-auto mb-4">
                                    <i class="bi bi-geo-alt fs-3"></i>
                                </div>
                                <h5 class="fw-bold">Afghanistan Tourism Office</h5>
                                <p class="text-muted">
                                    Kabul, Afghanistan<br>
                                    Phone: +93 776 992 603<br>
                                    Email: mrwiyarahmadzai@gmail.com
                                </p>
                                <div class="ratio ratio-16x9 mt-4">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3299.570500140472!2d69.179559!3d34.533333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d16a5a5e1e5b5b%3A0x8b5a5a5a5a5a5a5a!2sKabul%2C%20Afghanistan!5e0!3m2!1sen!2s!4v1623456789012!5m2!1sen!2s"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
