@extends('bootstrap-layout')

@section('title', 'Shop - Afghanistan Tourism')

@section('content')
    <div class="container py-5">
        <div class="mb-5 animate-on-scroll">
            <h1 class="display-5 fw-bold text-dark mb-3">Afghanistan Tourism Shop</h1>
            <p class="lead text-muted">
                Discover authentic Afghan products, from traditional clothing to transportation options for your journey
            </p>
        </div>

        <!-- Shop Categories -->
        <div class="d-flex overflow-auto pb-3 mb-4 animate-on-scroll">
            <div class="d-flex flex-nowrap gap-2">
                <a href="/shop?category=all" class="btn btn-primary flex-shrink-0">
                    All Products
                </a>
                <a href="/shop?category=clothing" class="btn btn-outline-primary flex-shrink-0">
                    Traditional Clothing
                </a>
                <a href="/shop?category=accessories" class="btn btn-outline-primary flex-shrink-0">
                    Handicrafts & Accessories
                </a>
                <a href="/shop?category=transport" class="btn btn-outline-primary flex-shrink-0">
                    Transportation
                </a>
                <a href="/shop?category=rental" class="btn btn-outline-primary flex-shrink-0">
                    Rental Services
                </a>
            </div>
        </div>

        <!-- Search and Filter -->
        <div class="card border-0 shadow-sm mb-5 animate-on-scroll">
            <div class="card-body p-4">
                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="search" class="form-label">Search</label>
                        <input type="text" id="search" placeholder="Search products..." class="form-control">
                    </div>

                    <div class="col-md-3">
                        <label for="price" class="form-label">Price Range</label>
                        <select id="price" class="form-select">
                            <option>Any Price</option>
                            <option>Under $50</option>
                            <option>$50 - $100</option>
                            <option>$100 - $500</option>
                            <option>Over $500</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="sort" class="form-label">Sort By</label>
                        <select id="sort" class="form-select">
                            <option>Featured</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Highest Rated</option>
                            <option>Newest</option>
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

        <!-- Products Grid -->
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-primary">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-tshirt text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <button class="btn btn-light rounded-circle">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="fw-bold">Traditional Afghan Embroidered Dress</h5>
                            <span class="badge bg-light text-primary">Clothing</span>
                        </div>
                        <p class="text-muted mb-3">
                            Beautiful hand-embroidered traditional Afghan dress with intricate patterns.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary fs-4">$120</span>
                            <a href="/shop/products/traditional-afghan-embroidered-dress" class="btn btn-primary btn-sm">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-success">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-rug text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <button class="btn btn-light rounded-circle">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="fw-bold">Handwoven Afghan Rug</h5>
                            <span class="badge bg-light text-success">Accessories</span>
                        </div>
                        <p class="text-muted mb-3">
                            Authentic handwoven rug featuring traditional Afghan patterns and designs.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary fs-4">$250</span>
                            <a href="/shop/products/handwoven-afghan-rug" class="btn btn-primary btn-sm">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-purple">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-car text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <button class="btn btn-light rounded-circle">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="fw-bold">Toyota Land Cruiser (2023)</h5>
                            <span class="badge bg-light text-purple">Transportation</span>
                        </div>
                        <p class="text-muted mb-3">
                            Reliable 4x4 vehicle perfect for exploring Afghanistan's rugged terrain.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary fs-4">$45,000</span>
                            <a href="/shop/products/toyota-land-cruiser-2023" class="btn btn-primary btn-sm">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-danger">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-car-side text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <button class="btn btn-light rounded-circle">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="fw-bold">Daily Car Rental (Toyota Corolla)</h5>
                            <span class="badge bg-light text-danger">Rental</span>
                        </div>
                        <p class="text-muted mb-3">
                            Rent a reliable Toyota Corolla for daily transportation during your stay.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary fs-4">$45/day</span>
                            <a href="/shop/products/daily-car-rental-toyota-corolla" class="btn btn-primary btn-sm">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-warning">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-gem text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <button class="btn btn-light rounded-circle">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="fw-bold">Afghan Handcrafted Jewelry Set</h5>
                            <span class="badge bg-light text-warning">Accessories</span>
                        </div>
                        <p class="text-muted mb-3">
                            Beautiful set of traditional Afghan jewelry made with silver and semi-precious stones.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary fs-4">$85</span>
                            <a href="/shop/products/afghan-handcrafted-jewelry-set" class="btn btn-primary btn-sm">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <div class="ratio ratio-16x9 bg-info">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-backpack text-white fs-1"></i>
                            </div>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <button class="btn btn-light rounded-circle">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="fw-bold">Afghanistan Travel Backpack</h5>
                            <span class="badge bg-light text-info">Accessories</span>
                        </div>
                        <p class="text-muted mb-3">
                            Durable and spacious backpack designed for travel in Afghanistan's diverse terrain.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary fs-4">$65</span>
                            <a href="/shop/products/afghanistan-travel-backpack" class="btn btn-primary btn-sm">
                                View Details
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
