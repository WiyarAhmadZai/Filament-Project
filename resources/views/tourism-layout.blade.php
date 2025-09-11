<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Afghanistan Tourism - Discover the Beauty of Afghanistan')</title>
    <meta name="description"
        content="Explore the breathtaking beauty of Afghanistan. Book tours, guides, and experiences in the heart of Central Asia.">

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

    <!-- Alpine.js for interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">

    @yield('head')
</head>

<body class="bg-gray-50 font-sans leading-normal tracking-normal">
    <!-- Navigation -->
    <nav x-data="{ mobileMenuOpen: false }" class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-2">
                        <div class="bg-blue-600 text-white p-2 rounded-lg">
                            <i class="fas fa-mountain text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold text-gray-800">Afghan<span
                                class="text-blue-600">Tourism</span></span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/"
                        class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Home</a>
                    <a href="/places"
                        class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Places</a>
                    <a href="/guides"
                        class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Guides</a>
                    <a href="/shop"
                        class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Shop</a>
                    <a href="/tickets"
                        class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Tickets</a>
                    <a href="/community"
                        class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Community</a>
                    <a href="/contact"
                        class="text-gray-700 hover:text-blue-600 font-medium transition duration-300">Contact</a>

                    @auth
                        <div class="relative" x-data="{ dropdownOpen: false }">
                            <button @click="dropdownOpen = !dropdownOpen"
                                class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 focus:outline-none">
                                <img class="h-8 w-8 rounded-full object-cover"
                                    src="{{ auth()->user()->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) }}"
                                    alt="{{ auth()->user()->name }}">
                                <span>{{ auth()->user()->name }}</span>
                                <i class="fas fa-chevron-down text-xs"></i>
                            </button>

                            <div x-show="dropdownOpen" @click.away="dropdownOpen = false"
                                class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                                <a href="/profile"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                <a href="/dashboard"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                <a href="/messages"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Messages</a>
                                <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="/logout" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="/login"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition duration-300">Login</a>
                        <a href="/register"
                            class="bg-white border border-blue-600 text-blue-600 hover:bg-blue-50 px-4 py-2 rounded-lg font-medium transition duration-300">Register</a>
                    @endauth
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="text-gray-700 hover:text-blue-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false" class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white shadow-lg">
                <a href="/"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Home</a>
                <a href="/places"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Places</a>
                <a href="/guides"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Guides</a>
                <a href="/shop"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Shop</a>
                <a href="/tickets"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Tickets</a>
                <a href="/community"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Community</a>
                <a href="/contact"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Contact</a>

                @auth
                    <div class="border-t border-gray-200 pt-2 mt-2">
                        <a href="/profile"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Profile</a>
                        <a href="/dashboard"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Dashboard</a>
                        <a href="/messages"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Messages</a>
                        <a href="/logout"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50"
                            onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">Logout</a>
                        <form id="logout-form-mobile" action="/logout" method="POST" class="hidden">
                            @csrf
                        </form>
                    </div>
                @else
                    <div class="border-t border-gray-200 pt-2 mt-2">
                        <a href="/login"
                            class="block px-3 py-2 rounded-md text-base font-medium text-blue-600 hover:bg-blue-50">Login</a>
                        <a href="/register"
                            class="block px-3 py-2 rounded-md text-base font-medium text-blue-600 hover:bg-blue-50">Register</a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="bg-blue-600 text-white p-2 rounded-lg">
                            <i class="fas fa-mountain text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold">Afghan<span class="text-blue-400">Tourism</span></span>
                    </div>
                    <p class="text-gray-300 mb-4 max-w-md">
                        Discover the breathtaking beauty of Afghanistan. Experience rich culture, stunning landscapes,
                        and warm hospitality.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-white transition">Home</a></li>
                        <li><a href="/places" class="text-gray-300 hover:text-white transition">Tourist Places</a>
                        </li>
                        <li><a href="/guides" class="text-gray-300 hover:text-white transition">Tour Guides</a></li>
                        <li><a href="/shop" class="text-gray-300 hover:text-white transition">Shop</a></li>
                        <li><a href="/tickets" class="text-gray-300 hover:text-white transition">Tickets</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-2 text-blue-400"></i>
                            <span>mrwiyarahmadzai@gmail.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fab fa-whatsapp mt-1 mr-2 text-green-400"></i>
                            <span>+93 776 992 603</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2 text-red-400"></i>
                            <span>Kabul, Afghanistan</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Afghanistan Tourism. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>

</html>
