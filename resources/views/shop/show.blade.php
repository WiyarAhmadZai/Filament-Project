@extends('bootstrap-layout')

@section('title', 'Traditional Afghan Embroidered Dress - Afghanistan Tourism Shop')

@section('content')
    <div class="container py-5">
        <div class="mx-auto" style="max-width: 1200px;">
            <!-- Breadcrumb -->
            <nav class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/shop">Shop</a>
                    </li>
                    <li class="breadcrumb-item active">Traditional Afghan Embroidered Dress</li>
                </ol>
            </nav>

            <!-- Product Header -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="row g-0">
                    <!-- Product Images -->
                    <div class="col-lg-6">
                        <div class="ratio ratio-16x9 bg-primary rounded-start">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-camera text-white fs-1"></i>
                            </div>
                        </div>

                        <div class="d-flex p-3">
                            <div class="ratio ratio-16x9 bg-primary me-2 rounded">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <i class="fas fa-camera text-white"></i>
                                </div>
                            </div>
                            <div class="ratio ratio-16x9 bg-success me-2 rounded">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <i class="fas fa-camera text-white"></i>
                                </div>
                            </div>
                            <div class="ratio ratio-16x9 bg-purple me-2 rounded">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <i class="fas fa-camera text-white"></i>
                                </div>
                            </div>
                            <div class="ratio ratio-16x9 bg-warning rounded">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <i class="fas fa-camera text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="col-lg-6">
                        <div class="card-body h-100 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <h1 class="display-6 fw-bold text-dark mb-2">Traditional Afghan Embroidered Dress</h1>
                                    <p class="text-muted">Beautiful hand-embroidered traditional Afghan dress with intricate
                                        patterns</p>
                                </div>
                                <button class="btn btn-light rounded-circle">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>

                            <div class="d-flex align-items-center mb-4">
                                <span class="text-warning me-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </span>
                                <span class="text-muted">(4.7) • 32 reviews</span>
                            </div>

                            <div class="mb-4">
                                <span class="badge bg-light text-primary me-2">
                                    Clothing
                                </span>
                                <span class="badge bg-light text-success">
                                    In Stock
                                </span>
                            </div>

                            <div class="mb-4">
                                <p class="display-6 fw-bold text-primary mb-1">$120</p>
                                <p class="text-muted">or 4 interest-free payments of $30 with <span
                                        class="fw-medium text-primary">AfghanPay</span></p>
                            </div>

                            <div class="mb-4">
                                <h5 class="fw-bold text-dark mb-3">Size</h5>
                                <div class="d-flex flex-wrap gap-2">
                                    <button class="btn btn-outline-primary">Small</button>
                                    <button class="btn btn-primary">Medium</button>
                                    <button class="btn btn-outline-primary">Large</button>
                                    <button class="btn btn-outline-primary">X-Large</button>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h5 class="fw-bold text-dark mb-3">Quantity</h5>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-outline-primary rounded-circle"
                                        style="width: 40px; height: 40px;">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="number" min="1" value="1"
                                        class="form-control text-center mx-2" style="width: 60px;">
                                    <button class="btn btn-outline-primary rounded-circle"
                                        style="width: 40px; height: 40px;">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="mt-auto">
                                <div class="d-flex flex-wrap gap-3">
                                    <button class="btn btn-primary flex-grow-1">
                                        <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                                    </button>
                                    <button class="btn btn-secondary flex-grow-1">
                                        <i class="fas fa-bolt me-2"></i> Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Description -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h2 class="mb-4">Product Description</h2>
                            <p class="text-muted mb-3">
                                This exquisite traditional Afghan embroidered dress is a masterpiece of Afghan
                                craftsmanship.
                                Hand-stitched with intricate patterns that have been passed down through generations,
                                this dress represents the rich cultural heritage of Afghanistan.
                            </p>
                            <p class="text-muted mb-3">
                                Made from high-quality cotton fabric, the dress features beautiful floral and geometric
                                motifs embroidered with silk threads in vibrant colors. The embroidery work is done entirely
                                by skilled Afghan artisans, primarily women, who have mastered this traditional art form.
                            </p>
                            <p class="text-muted mb-3">
                                The dress is designed with a comfortable fit and includes traditional elements such as
                                long sleeves and a flowing silhouette that complements the natural beauty of Afghan women.
                                It's perfect for special occasions, cultural events, or as a meaningful souvenir from your
                                visit to Afghanistan.
                            </p>
                            <p class="text-muted mb-0">
                                Each dress is unique, with slight variations in the embroidery patterns, making it a
                                one-of-a-kind piece that tells the story of Afghan artistry and tradition.
                            </p>
                        </div>
                    </div>

                    <!-- Specifications -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h2 class="mb-4">Specifications</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="fw-bold text-dark mb-3">General</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0 py-2 border-0">
                                            <span class="text-muted">Material</span>
                                            <span class="fw-medium float-end">100% Cotton</span>
                                        </li>
                                        <li class="list-group-item px-0 py-2 border-0">
                                            <span class="text-muted">Color</span>
                                            <span class="fw-medium float-end">Blue with Multi-color Embroidery</span>
                                        </li>
                                        <li class="list-group-item px-0 py-2 border-0">
                                            <span class="text-muted">Pattern</span>
                                            <span class="fw-medium float-end">Hand-embroidered</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="fw-bold text-dark mb-3">Measurements</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0 py-2 border-0">
                                            <span class="text-muted">Length</span>
                                            <span class="fw-medium float-end">58 inches</span>
                                        </li>
                                        <li class="list-group-item px-0 py-2 border-0">
                                            <span class="text-muted">Sleeve Length</span>
                                            <span class="fw-medium float-end">24 inches</span>
                                        </li>
                                        <li class="list-group-item px-0 py-2 border-0">
                                            <span class="text-muted">Waist</span>
                                            <span class="fw-medium float-end">32 inches (adjustable)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h2 class="mb-0">Customer Reviews</h2>
                                <button class="btn btn-primary">
                                    Write a Review
                                </button>
                            </div>

                            <div>
                                <!-- Review 1 -->
                                <div class="border-bottom border-light pb-4 mb-4">
                                    <div class="d-flex">
                                        <img src="https://ui-avatars.com/api/?name=Sarah+Johnson"
                                            class="rounded-circle me-3" width="50" height="50"
                                            alt="Sarah Johnson">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-bold me-3 mb-1">Sarah Johnson</h5>
                                                <span class="text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="text-muted small mb-2">Purchased in May 2023</p>
                                            <p class="text-muted mb-0">
                                                This dress is absolutely beautiful! The embroidery work is exquisite and the
                                                quality is exceptional. I received many compliments when I wore it to a
                                                cultural event.
                                                It's clear that great care and skill went into making this piece.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review 2 -->
                                <div class="border-bottom border-light pb-4 mb-4">
                                    <div class="d-flex">
                                        <img src="https://ui-avatars.com/api/?name=Marie+Dubois"
                                            class="rounded-circle me-3" width="50" height="50"
                                            alt="Marie Dubois">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-bold me-3 mb-1">Marie Dubois</h5>
                                                <span class="text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </span>
                                            </div>
                                            <p class="text-muted small mb-2">Purchased in March 2023</p>
                                            <p class="text-muted mb-0">
                                                I bought this dress as a gift for my sister who is visiting Afghanistan.
                                                The craftsmanship is remarkable and the colors are even more vibrant in
                                                person.
                                                Shipping was quick and the packaging was excellent. Highly recommended!
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review 3 -->
                                <div>
                                    <div class="d-flex">
                                        <img src="https://ui-avatars.com/api/?name=Zara+Ahmadi"
                                            class="rounded-circle me-3" width="50" height="50" alt="Zara Ahmadi">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-bold me-3 mb-1">Zara Ahmadi</h5>
                                                <span class="text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="text-muted small mb-2">Purchased in January 2023</p>
                                            <p class="text-muted mb-0">
                                                As an Afghan woman, I'm proud to see our traditional clothing being
                                                appreciated
                                                by international customers. The quality of this dress is excellent and the
                                                embroidery is done with great precision. It fits true to size and is very
                                                comfortable.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Shipping Info -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h2 class="mb-4">Shipping & Returns</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0 py-3 border-0">
                                    <div class="d-flex">
                                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="fas fa-shipping-fast text-primary"></i>
                                        </div>
                                        <div>
                                            <span class="fw-medium">Free Shipping</span>
                                            <span class="text-muted d-block">on orders over $100</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 py-3 border-0">
                                    <div class="d-flex">
                                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="fas fa-truck text-success"></i>
                                        </div>
                                        <div>
                                            <span class="fw-medium">Delivery Time</span>
                                            <span class="text-muted d-block">5-10 business days internationally</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 py-3 border-0">
                                    <div class="d-flex">
                                        <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="fas fa-undo text-warning"></i>
                                        </div>
                                        <div>
                                            <span class="fw-medium">Free Returns</span>
                                            <span class="text-muted d-block">within 30 days</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 py-3 border-0">
                                    <div class="d-flex">
                                        <div class="bg-purple bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center me-3"
                                            style="width: 40px; height: 40px;">
                                            <i class="fas fa-shield-alt text-purple"></i>
                                        </div>
                                        <div>
                                            <span class="fw-medium">Secure Payment</span>
                                            <span class="text-muted d-block">100% protected</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Related Products -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="mb-4">Related Products</h2>
                            <div>
                                <div class="d-flex align-items-center p-3 border rounded mb-3">
                                    <div class="bg-primary bg-opacity-10 d-flex align-items-center justify-content-center me-3"
                                        style="width: 60px; height: 60px; border-radius: 8px;">
                                        <i class="fas fa-tshirt text-primary fs-4"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1">Afghan Shawl</h5>
                                        <p class="text-primary fw-bold mb-0">$45</p>
                                    </div>
                                    <a href="/shop/products/afghan-shawl" class="ms-auto text-primary">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>

                                <div class="d-flex align-items-center p-3 border rounded mb-3">
                                    <div class="bg-success bg-opacity-10 d-flex align-items-center justify-content-center me-3"
                                        style="width: 60px; height: 60px; border-radius: 8px;">
                                        <i class="fas fa-vest text-success fs-4"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1">Traditional Vest</h5>
                                        <p class="text-primary fw-bold mb-0">$75</p>
                                    </div>
                                    <a href="/shop/products/traditional-vest" class="ms-auto text-primary">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>

                                <div class="d-flex align-items-center p-3 border rounded">
                                    <div class="bg-warning bg-opacity-10 d-flex align-items-center justify-content-center me-3"
                                        style="width: 60px; height: 60px; border-radius: 8px;">
                                        <i class="fas fa-scarf text-warning fs-4"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1">Embroidered Scarf</h5>
                                        <p class="text-primary fw-bold mb-0">$35</p>
                                    </div>
                                    <a href="/shop/products/embroidered-scarf" class="ms-auto text-primary">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
