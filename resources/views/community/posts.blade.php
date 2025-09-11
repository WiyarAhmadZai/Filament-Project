@extends('bootstrap-layout')

@section('title', 'Community Posts - Afghanistan Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/IMG_3623.JPG') }}') center center no-repeat; background-size: cover;">
        <div class="container hero-content text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown">
                        Community <span class="text-primary">Posts</span>
                    </h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                        Share experiences and connect with fellow travelers
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Posts Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-up">
                    @auth
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                <form action="{{ route('posts.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <textarea name="content" class="form-control" rows="3"
                                            placeholder="Share your thoughts, experiences, or ask questions..." required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="title" class="form-control" placeholder="Post title"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="url" name="image_url" class="form-control"
                                            placeholder="Image URL (optional)">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-secondary btn-sm">
                                                <i class="bi bi-image me-1"></i> Photo
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary btn-sm ms-2">
                                                <i class="bi bi-camera-video me-1"></i> Video
                                            </button>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Post</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endauth

                    <!-- Posts -->
                    @forelse($posts as $post)
                        <div class="card border-0 shadow-sm mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="{{ $post->user->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode($post->user->name) }}"
                                        class="rounded-circle me-3" alt="{{ $post->user->name }}" width="50"
                                        height="50">
                                    <div>
                                        <h5 class="mb-0">{{ $post->user->name }}</h5>
                                        <p class="text-muted mb-0 small">Posted {{ $post->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">
                                    {{ $post->content }}
                                </p>
                                @if ($post->image_url)
                                    <img src="{{ $post->image_url }}" class="card-img mb-3" alt="Post image"
                                        style="height: 300px; object-fit: cover;">
                                @endif
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-heart me-1"></i>{{ $post->likes_count }}
                                        </button>
                                        <button class="btn btn-sm btn-outline-secondary ms-2">
                                            <i class="bi bi-chat me-1"></i>{{ $post->comments_count }}
                                        </button>
                                    </div>
                                    <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-share me-1"></i>View
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body text-center py-5">
                                <i class="bi bi-journal-text fs-1 text-muted mb-3"></i>
                                <h5 class="fw-bold">No posts yet</h5>
                                <p class="text-muted">Be the first to share your travel experiences!</p>
                            </div>
                        </div>
                    @endforelse

                    <!-- Pagination -->
                    @if ($posts->hasPages())
                        <div class="d-flex justify-content-center">
                            {{ $posts->links() }}
                        </div>
                    @endif
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Trending Topics</h5>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-primary">#Afghanistan</span>
                                <span class="badge bg-secondary">#Travel</span>
                                <span class="badge bg-success">#Tourism</span>
                                <span class="badge bg-danger">#Adventure</span>
                                <span class="badge bg-warning text-dark">#Culture</span>
                                <span class="badge bg-info">#History</span>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Top Contributors</h5>
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('img/IMG.jpg') }}" class="rounded-circle me-3" alt="User"
                                    width="40" height="40">
                                <div>
                                    <h6 class="mb-0">Ahmad Wiyar</h6>
                                    <p class="text-muted mb-0 small">124 posts</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('img/IMG_3628.JPG') }}" class="rounded-circle me-3" alt="User"
                                    width="40" height="40">
                                <div>
                                    <h6 class="mb-0">Fatima Rahimi</h6>
                                    <p class="text-muted mb-0 small">98 posts</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/IMG_3629.JPG') }}" class="rounded-circle me-3" alt="User"
                                    width="40" height="40">
                                <div>
                                    <h6 class="mb-0">Mohammad Ali</h6>
                                    <p class="text-muted mb-0 small">87 posts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
