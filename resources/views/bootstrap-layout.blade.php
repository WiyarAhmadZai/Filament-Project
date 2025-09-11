    <!-- Google Fonts - Attractive Typography -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">

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
            /* Light background */
            --dark-text: #264653;
            /* Dark slate for text */
            --muted-text: #6C757D;
            /* Muted gray for secondary text */
            --off-white: #FCFCFC;
            /* Off-white for cards */

            /* Gradient Colors */
            --hero-gradient-start: rgba(38, 70, 83, 0.85);
            --hero-gradient-end: rgba(38, 70, 83, 0.95);

            /* Custom Properties for Components */
            --border-radius: 12px;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            --box-shadow-hover: 0 12px 24px rgba(0, 0, 0, 0.15);
            --transition: all 0.3s ease;
        }

        /* Typography - Attractive Font Pairing with Psychology */
        body {
            font-family: 'Roboto', 'Segoe UI', 'Helvetica Neue', sans-serif;
            font-weight: 400;
            color: var(--dark-text);
            line-height: 1.6;
            background-color: var(--light-bg);
        }

        /* Headings with Serif for Elegance and Trust */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', 'Georgia', serif;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: var(--deep-slate);
        }

        /* Display headings with more weight for impact */
        .display-1,
        .display-2,
        .display-3,
        .display-4,
        .display-5,
        .display-6 {
            font-family: 'Playfair Display', 'Georgia', serif;
            font-weight: 800;
            letter-spacing: 1px;
        }

        /* Lead text for better readability */
        .lead {
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            font-size: 1.25rem;
            letter-spacing: 0.2px;
        }

        /* Navigation - Clean and Professional */
        .navbar {
            transition: var(--transition);
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            padding: 1rem 0;
        }

        .navbar-brand {
            font-family: 'Playfair Display', 'Georgia', serif;
            font-weight: 800;
            font-size: 1.75rem;
            transition: var(--transition);
            color: var(--dark-text);
        }

        .navbar-brand:hover {
            transform: scale(1.05);
            color: var(--primary-color);
        }

        .navbar-brand span {
            color: var(--secondary-color);
        }

        .nav-link {
            position: relative;
            transition: var(--transition);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
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

        /* Dropdown animations */
        .dropdown-menu {
            animation: fadeInDown 0.3s ease;
            border: none;
            border-radius: 8px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .dropdown-item {
            transition: var(--transition);
            border-radius: 4px;
            margin: 2px 8px;
            font-family: 'Roboto', sans-serif;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, rgba(45, 93, 44, 0.1), rgba(42, 157, 143, 0.1));
            color: var(--primary-color);
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translate3d(0, -20px, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        /* Navbar transition */
        .navbar {
            transition: var(--transition);
        }

        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
        }

        .navbar.scrolled .navbar-brand {
            color: var(--dark-text);
        }

        .navbar.scrolled .nav-link {
            color: var(--dark-text) !important;
        }

        /* Hero Section - Inspiring and Inviting */
        .hero-section {
            background: linear-gradient(var(--hero-gradient-start), var(--hero-gradient-end)), url('{{ asset('img/IMG_3623.JPG') }}') center center no-repeat;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-content h1 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 1.5rem;
        }

        .hero-content .lead {
            font-weight: 300;
            max-width: 700px;
            margin: 0 auto 2rem;
        }

        /* Feature Icons - Visual Appeal */
        .feature-icon {
            width: 5rem;
            height: 5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            transition: var(--transition);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 0 auto 1.5rem;
        }

        .feature-icon:hover {
            transform: translateY(-8px) scale(1.1);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        /* Cards - Clean and Modern */
        .card {
            transition: var(--transition);
            border: none;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            background-color: var(--off-white);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: var(--box-shadow-hover);
        }

        .card-title {
            color: var(--deep-slate);
            font-family: 'Playfair Display', serif;
        }

        /* Buttons - Action-Oriented with Psychology */
        .btn {
            font-family: 'Roboto', sans-serif;
            font-weight: 600;
            border-radius: 50px;
            padding: 12px 28px;
            transition: var(--transition);
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            font-size: 0.9rem;
        }

        /* Primary Button - Trust and Reliability */
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), #1a4a19);
            color: white;
            box-shadow: 0 4px 15px rgba(45, 93, 44, 0.3);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-hover), #0f2e0f);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(45, 93, 44, 0.4);
        }

        /* Secondary Button - Warmth and Energy */
        .btn-secondary {
            background: linear-gradient(135deg, var(--secondary-color), #e08c4d);
            color: white;
            box-shadow: 0 4px 15px rgba(244, 162, 97, 0.3);
        }

        .btn-secondary:hover {
            background: linear-gradient(135deg, #e6954a, #d17a3a);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(244, 162, 97, 0.4);
        }

        /* Outline Primary - Elegant Contrast */
        .btn-outline-primary {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background-color: transparent;
        }

        .btn-outline-primary:hover {
            background: linear-gradient(135deg, var(--primary-color), #1a4a19);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(45, 93, 44, 0.4);
        }

        /* Light Button - Subtle Elegance */
        .btn-light {
            background-color: white;
            color: var(--primary-color);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .btn-light:hover {
            background-color: #f8f9fa;
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        /* Outline Light - Clean Contrast */
        .btn-outline-light {
            border: 2px solid white;
            color: white;
            background-color: transparent;
        }

        .btn-outline-light:hover {
            background-color: white;
            color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        /* Footer - Professional and Trustworthy */
        .footer {
            background: linear-gradient(135deg, var(--deep-slate), #1a333d);
            color: white;
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

        /* Section animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Form elements - Clean and Accessible */
        .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 12px 16px;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(45, 93, 44, 0.25);
        }

        .form-select {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 12px 16px;
            font-family: 'Roboto', sans-serif;
            background-color: white;
        }

        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(45, 93, 44, 0.25);
        }

        /* Badges - Categorical Clarity */
        .badge {
            font-family: 'Roboto', sans-serif;
            font-weight: 600;
            border-radius: 50px;
            padding: 6px 12px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Custom badge colors for better categorization */
        .badge.bg-light.text-primary {
            background-color: rgba(45, 93, 44, 0.1) !important;
            color: var(--primary-color) !important;
        }

        .badge.bg-light.text-success {
            background-color: rgba(42, 157, 143, 0.1) !important;
            color: var(--accent-color) !important;
        }

        .badge.bg-light.text-purple {
            background-color: rgba(106, 90, 148, 0.1) !important;
            color: #6a5a94 !important;
        }

        .badge.bg-light.text-warning {
            background-color: rgba(233, 196, 106, 0.1) !important;
            color: var(--warm-sand) !important;
        }

        .badge.bg-light.text-danger {
            background-color: rgba(231, 111, 81, 0.1) !important;
            color: var(--sunset-orange) !important;
        }

        .badge.bg-light.text-info {
            background-color: rgba(142, 202, 230, 0.1) !important;
            color: var(--sky-blue) !important;
        }

        /* Text colors with psychology */
        .text-primary {
            color: var(--primary-color) !important;
        }

        .text-secondary {
            color: var(--secondary-color) !important;
        }

        .text-accent {
            color: var(--accent-color) !important;
        }

        .text-muted {
            color: var(--muted-text) !important;
        }

        .text-sky {
            color: var(--sky-blue) !important;
        }

        .text-orange {
            color: var(--sunset-orange) !important;
        }

        .text-sand {
            color: var(--warm-sand) !important;
        }

        /* Background colors */
        .bg-primary {
            background: linear-gradient(135deg, var(--primary-color), #1a4a19) !important;
        }

        .bg-secondary {
            background: linear-gradient(135deg, var(--secondary-color), #e08c4d) !important;
        }

        .bg-accent {
            background: linear-gradient(135deg, var(--accent-color), #227f75) !important;
        }

        .bg-light {
            background-color: var(--light-bg) !important;
        }

        .bg-sky {
            background-color: var(--sky-blue) !important;
        }

        .bg-orange {
            background-color: var(--sunset-orange) !important;
        }

        .bg-sand {
            background-color: var(--warm-sand) !important;
        }

        /* Rating stars - Visual Appeal */
        .text-warning {
            color: var(--warm-sand) !important;
        }

        /* Responsive improvements */
        @media (max-width: 768px) {
            .hero-section {
                height: 80vh;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .btn {
                padding: 10px 20px;
                font-size: 0.85rem;
            }
        }

        /* Additional utility classes */
        .rounded-lg {
            border-radius: var(--border-radius) !important;
        }

        .shadow-sm {
            box-shadow: var(--box-shadow) !important;
        }

        .shadow-hover:hover {
            box-shadow: var(--box-shadow-hover) !important;
        }

        .transition {
            transition: var(--transition) !important;
        }
    </style>

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
                            <a class="nav-link dropdown-toggle" href="/places" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-mountain me-1"></i> Places
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/places">All Places</a></li>
                                <li><a class="dropdown-item" href="/places/historical">Historical Places</a></li>
                                <li><a class="dropdown-item" href="/places/natural">Natural Wonders</a></li>
                                <li><a class="dropdown-item" href="/places/cultural">Cultural Sites</a></li>
                            </ul>
                        </li>

                        <!-- Guides Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/guides" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-guide me-1"></i> Guides
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/guides">All Guides</a></li>
                                <li><a class="dropdown-item" href="/guides/certified">Certified Guides</a></li>
                                <li><a class="dropdown-item" href="/guides/local">Local Guides</a></li>
                            </ul>
                        </li>

                        <!-- Shop Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/shop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-shopping-bag me-1"></i> Shop
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/shop">All Products</a></li>
                                <li><a class="dropdown-item" href="/shop/clothing">Clothing</a></li>
                                <li><a class="dropdown-item" href="/shop/crafts">Local Crafts</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/cars">
                                <i class="fas fa-car me-1"></i> Cars
                            </a>
                        </li>

                        <!-- Tickets Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/tickets" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-ticket-alt me-1"></i> Tickets
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/tickets">All Tickets</a></li>
                                <li><a class="dropdown-item" href="/tickets/visas">Visas</a></li>
                                <li><a class="dropdown-item" href="/tickets/flights">Flights</a></li>
                            </ul>
                        </li>

                        <!-- Community Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/community" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-users me-1"></i> Community
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/community">Community Home</a></li>
                                <li><a class="dropdown-item" href="/community/posts">Travel Stories</a></li>
                                <li><a class="dropdown-item" href="/community/videos">Travel Videos</a></li>
                                <li><a class="dropdown-item" href="/community/members">Community Members</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/contact">
                                <i class="fas fa-envelope me-1"></i> Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
