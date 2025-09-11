@extends('bootstrap-layout')

@section('title', 'Dashboard - Afghanistan Tourism')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5 fw-bold mb-4">Dashboard</h1>
                <p class="lead text-muted mb-5">Welcome back, {{ auth()->user()->name }}! Manage your account and activities.
                </p>
            </div>
        </div>

        <div class="row">
            <!-- User Info -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <img src="{{ auth()->user()->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) }}"
                            alt="{{ auth()->user()->name }}" class="rounded-circle mb-3" width="120" height="120">
                        <h3 class="fw-bold">{{ auth()->user()->name }}</h3>
                        <p class="text-muted">{{ auth()->user()->email }}</p>
                        <span class="badge bg-primary">
                            Member since {{ auth()->user()->created_at->format('M Y') }}
                        </span>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mt-4">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Quick Actions</h5>
                        <div class="d-grid gap-2">
                            <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary">
                                <i class="bi bi-person me-2"></i> Edit Profile
                            </a>
                            <a href="{{ route('bookings') }}" class="btn btn-outline-primary">
                                <i class="bi bi-calendar-check me-2"></i> My Bookings
                            </a>
                            <a href="{{ route('community.posts.index') }}" class="btn btn-outline-primary">
                                <i class="bi bi-chat-square-text me-2"></i> Community Posts
                            </a>
                            <a href="{{ route('messages.index') }}" class="btn btn-outline-primary">
                                <i class="bi bi-envelope me-2"></i> Messages
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Stats -->
            <div class="col-lg-8">
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="feature-icon bg-primary text-white me-3">
                                        <i class="bi bi-calendar-check fs-4"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title fw-bold mb-0">Bookings</h5>
                                        <p class="mb-0 text-muted">0 active bookings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="feature-icon bg-primary text-white me-3">
                                        <i class="bi bi-chat-square-text fs-4"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title fw-bold mb-0">Posts</h5>
                                        <p class="mb-0 text-muted">{{ auth()->user()->posts()->count() }} posts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="feature-icon bg-primary text-white me-3">
                                        <i class="bi bi-people fs-4"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title fw-bold mb-0">Following</h5>
                                        <p class="mb-0 text-muted">{{ auth()->user()->following()->count() }} users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="feature-icon bg-primary text-white me-3">
                                        <i class="bi bi-person-plus fs-4"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title fw-bold mb-0">Followers</h5>
                                        <p class="mb-0 text-muted">{{ auth()->user()->followers()->count() }} followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4">Recent Activity</h5>

                        @if (auth()->user()->posts()->count() > 0)
                            <div class="row g-4">
                                @foreach (auth()->user()->posts as $post)
                                    <div class="col-12">
                                        <div class="card h-100 border-0 shadow-sm">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="{{ $post->user->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode($post->user->name) }}"
                                                        alt="{{ $post->user->name }}" class="rounded-circle me-2"
                                                        width="40" height="40">
                                                    <div>
                                                        <h6 class="mb-0 fw-bold">{{ $post->user->name }}</h6>
                                                        <small
                                                            class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                                                    </div>
                                                </div>

                                                <h5 class="card-title">{{ $post->title }}</h5>
                                                <p class="card-text">{{ $post->content }}</p>

                                                @if ($post->image_url)
                                                    <img src="{{ $post->image_url }}" class="img-fluid rounded mb-3"
                                                        alt="Post image">
                                                @endif

                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <button class="btn btn-sm btn-outline-primary">
                                                            <i class="bi bi-heart"></i> {{ $post->likes_count }}
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-secondary ms-2">
                                                            <i class="bi bi-chat"></i> {{ $post->comments_count }}
                                                        </button>
                                                    </div>
                                                    <a href="{{ route('posts.show', $post) }}"
                                                        class="btn btn-sm btn-primary">
                                                        View Post
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-5">
                                <i class="bi bi-journal-text fs-1 text-muted mb-3"></i>
                                <h5 class="fw-bold">No recent activity</h5>
                                <p class="text-muted">Your recent posts and interactions will appear here.</p>
                                <a href="{{ route('community.posts.index') }}" class="btn btn-primary">
                                    <i class="bi bi-plus-circle me-1"></i> Create Post
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
