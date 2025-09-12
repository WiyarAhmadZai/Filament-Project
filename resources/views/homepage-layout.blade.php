<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Afghanistan Tourism')</title>

    <!-- Google Fonts - Attractive Typography -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Tourism Site Color Palette - Enhanced with Color Psychology */
        :root {
            /* Primary Colors - Earthy, Natural Tones for Trust and Calm */
            --primary-color: #2D5D2C;
            /* Deep Forest Green - Nature, Growth, Harmony */
            --primary-hover: #1e3e1d;
            /* Darker Forest Green */
            --secondary-color: #F4A261;
            /* Warm Terracotta - Warmth, Energy, Friendliness */
            --accent-color: #2A9D8F;
            /* Teal for Water/Nature - Calm, Trust, Balance */

            /* Additional Colors for Rich Experience */
            --sky-blue: #8ECAE6;
            /* Sky Blue - Openness, Freedom, Tranquility */
            --sunset-orange: #E76F51;
            /* Sunset Orange - Adventure, Enthusiasm, Warmth */
            --warm-sand: #E9C46A;
            /* Warm Sand - Comfort, Stability, Authenticity */
            --deep-slate: #264653;
            /* Deep Slate - Sophistication, Reliability, Depth */

            /* Neutral Colors */
            --light-bg: #F8F9FA;
            --dark-text: #264653;
            --muted-text: #6C757D;
            --off-white: #FCFCFC;

            /* Gradient Colors */
            --hero-gradient-start: rgba(38, 70, 83, 0.85);
            --hero-gradient-end: rgba(38, 70, 83, 0.95);

            /* Custom Properties for Components */
            --border-radius: 12px;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            --box-shadow-hover: 0 12px 24px rgba(0, 0, 0, 0.15);
            --transition: all 0.3s ease;
        }

        /* Video Hero Section - Fullscreen with overlay */
        .video-hero {
            position: relative;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Video styling to cover entire screen */
        .video-hero video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            transform: translate(-50%, -50%);
            z-index: 0;
        }

        /* Overlay for better text visibility */
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        /* Hero content positioning */
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Navigation - Clean and Professional with Hero Background */
        .navbar {
            transition: var(--transition);
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            padding: 1rem 0;
            background: linear-gradient(135deg, rgba(38, 70, 83, 0.95), rgba(38, 70, 83, 0.9)) !important;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-family: 'Playfair Display', 'Georgia', serif;
            font-weight: 800;
            font-size: 1.75rem;
            transition: var(--transition);
            color: white;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
            color: var(--secondary-color);
        }

        .nav-link {
            position: relative;
            transition: var(--transition);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            color: white !important;
        }

        .nav-link:hover {
            color: var(--secondary-color) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--secondary-color);
            transition: var(--transition);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Buttons - Action-Oriented with Psychology */
        .btn {
            font-family: 'Roboto', sans-serif;
            font-weight: 600;
            border-radius: 50px;
            padding: 12px 28px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            font-size: 0.9rem;
            z-index: 3;
            position: relative;
        }

        /* Primary Button - Trust and Reliability */
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), #1a4a19);
            color: white;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-hover), #0f2e0f);
            transform: translateY(-3px);
        }

        /* Footer - Professional and Trustworthy */
        .footer {
            background: linear-gradient(135deg, var(--deep-slate), #1a333d);
            color: white;
            position: relative;
            z-index: 2;
        }

        .footer h5 {
            color: var(--secondary-color);
            font-family: 'Playfair Display', 'Georgia', serif;
            font-weight: 700;
        }

        .footer a {
            color: #adb5bd;
            transition: var(--transition);
        }

        .footer a:hover {
            color: var(--secondary-color);
            text-decoration: none;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            transition: var(--transition);
        }

        .social-icon:hover {
            background: linear-gradient(135deg, var(--secondary-color), #e08c4d);
            transform: translateY(-5px);
        }

        /* Sticky navbar */
        @media (min-width: 992px) {
            .navbar {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1030;
                transform: translateY(0);
            }

            .hero-content {
                margin-top: 70px;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                height: 80vh;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .btn {
                font-size: 0.85rem;
            }

            .navbar {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1030;
                background: linear-gradient(135deg, rgba(38, 70, 83, 0.95), rgba(38, 70, 83, 0.9)) !important;
            }

            .hero-content {
                margin-top: 70px;
            }
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Header / Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="/">
                    <i class="fas fa-mountain me-2"></i>Afghanistan Tourism
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">
                                <i class="fas fa-home me-1"></i> Home
                            </a>
                        </li>
                        <!-- Places Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/places" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-mountain me-1"></i> Places
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/places">All Places</a></li>
                                <li><a class="dropdown-item" href="/places/historical">Historical Places</a></li>
                                <li><a class="dropdown-item" href="/places/natural">Natural Wonders</a></li>
                                <li><a class="dropdown-item" href="/places/cultural">Cultural Sites</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/guides">
                                <i class="fas fa-user-guide me-1"></i> Guides
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/community">
                                <i class="fas fa-users me-1"></i> Community
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">
                                <i class="fas fa-envelope me-1"></i> Contact
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">
                                <i class="fas fa-user me-1"></i> Dashboard
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex-grow-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer py-4 mt-auto">
        <div class="container text-center">
            <p class="mb-2">&copy; {{ date('Y') }} Afghanistan Tourism. All rights reserved.</p>
            <div>
                <a href="https://facebook.com" class="text-light me-3">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a href="https://twitter.com" class="text-light me-3">
                    <i class="fab fa-twitter fa-lg"></i>
                </a>
                <a href="https://instagram.com" class="text-light">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap Bundle (JS + Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <!-- Livewire Scripts -->
    @livewireScripts
    <!-- Custom JS -->
    <script>
        // Initialize AOS animations
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Sticky navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scroll for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>
