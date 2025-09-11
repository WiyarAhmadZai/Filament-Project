@extends('bootstrap-layout')

@section('title', 'My Profile - Afghanistan Tourism')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5 fw-bold mb-4">My Profile</h1>
                <p class="lead text-muted mb-5">Manage your account information and preferences</p>
            </div>
        </div>

        <div class="row">
            <!-- Profile Info -->
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
                        <h5 class="fw-bold mb-3">Account Statistics</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Bookings</span>
                                <span class="badge bg-primary rounded-pill">0</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Posts</span>
                                <span class="badge bg-primary rounded-pill">
                                    {{ auth()->user()->posts()->count() }}
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Following</span>
                                <span class="badge bg-primary rounded-pill">
                                    {{ auth()->user()->following()->count() }}
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Followers</span>
                                <span class="badge bg-primary rounded-pill">
                                    {{ auth()->user()->followers()->count() }}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Profile Form and Posts -->
            <div class="col-lg-8">
                <ul class="nav nav-tabs mb-4" id="profileTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="edit-tab" data-bs-toggle="tab" data-bs-target="#edit"
                            type="button" role="tab">
                            Edit Profile
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="posts-tab" data-bs-toggle="tab" data-bs-target="#posts" type="button"
                            role="tab">
                            My Posts
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="profileTabContent">
                    <!-- Edit Profile Tab -->
                    <div class="tab-pane fade show active" id="edit" role="tabpanel">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <form action="/profile" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" id="name" name="name"
                                            value="{{ auth()->user()->name }}" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" id="email" name="email"
                                            value="{{ auth()->user()->email }}" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" id="phone" name="phone"
                                            value="{{ auth()->user()->phone ?? '' }}" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="bio" class="form-label">Bio</label>
                                        <textarea id="bio" name="bio" rows="4" class="form-control">{{ auth()->user()->bio ?? '' }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="avatar" class="form-label">Profile Picture</label>
                                        <input type="file" id="avatar" name="avatar" accept="image/*"
                                            class="form-control">
                                        <div class="form-text">PNG, JPG up to 2MB</div>
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg w-100">
                                            Update Profile
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- My Posts Tab -->
                    <div class="tab-pane fade" id="posts" role="tabpanel">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h5 class="fw-bold mb-4">My Posts</h5>

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
                                                            <img src="{{ $post->image_url }}"
                                                                class="img-fluid rounded mb-3" alt="Post image">
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
                                        <h5 class="fw-bold">No posts yet</h5>
                                        <p class="text-muted">Share your travel experiences with the community!</p>
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
        </div>
    </div>
@endsection
