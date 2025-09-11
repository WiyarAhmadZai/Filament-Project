    <!-- Google Fonts - Attractive Typography -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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

        /* Dropdown animations */
        .dropdown-menu {
            animation: fadeInDown 0.3s ease;
            border: none;
            border-radius: 8px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            background: linear-gradient(135deg, var(--primary-color), #1a4a19);
            border: none;
            margin-top: 0.5rem;
        }

        .dropdown-item {
            transition: var(--transition);
            border-radius: 4px;
            margin: 2px 8px;
            font-family: 'Roboto', sans-serif;
            color: white !important;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.2));
            color: var(--secondary-color) !important;
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
            background: linear-gradient(135deg, rgba(38, 70, 83, 0.95), rgba(38, 70, 83, 0.9)) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
        }

        /* Hero Section - Inspiring and Inviting */
        .hero-section {
            background: linear-gradient(var(--hero-gradient-start), var(--hero-gradient-end)), url('{{ asset('videos/مکان های تاریخی افغانستان زیبا historical places of Afghanistan.mp4') }}') center center no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
            overflow: hidden;
            z-index: 0;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 3rem 1rem;
        }

        .hero-content h1 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 1.5rem;
        }

        .hero-content .lead {
            font-weight: 300;
            max-width: 700px;
            margin: 0 auto 2rem;
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

                        <!-- Guides Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/guides" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                            <a class="nav-link dropdown-toggle" href="/shop" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                            <a class="nav-link dropdown-toggle" href="/tickets" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                            <a class="nav-link dropdown-toggle" href="/community" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
