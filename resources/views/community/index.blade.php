@extends('bootstrap-layout')

@section('title', 'Community - Afghanistan Tourism')

@section('content')
    <div class="container py-5">
        <div class="mb-5 animate-on-scroll">
            <h1 class="display-5 fw-bold text-dark mb-3">Afghanistan Tourism Community</h1>
            <p class="lead text-muted">
                Connect with fellow travelers, share your experiences, and discover amazing stories from Afghanistan
            </p>
        </div>

        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Create Post -->
                <div class="card border-0 shadow-sm mb-4 animate-on-scroll">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'User') }}"
                                class="rounded-circle me-3" width="50" height="50" alt="User">
                            <div class="flex-grow-1">
                                <form action="{{ route('posts.store') }}" method="POST">
                                    @csrf
                                    <textarea name="content" placeholder="Share your travel experience, photos, or thoughts..." class="form-control mb-3"
                                        rows="3"></textarea>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-light btn-sm me-2">
                                                <i class="fas fa-image"></i> Photo
                                            </button>
                                            <button type="button" class="btn btn-light btn-sm">
                                                <i class="fas fa-video"></i> Video
                                            </button>
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            Post
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Posts Feed -->
                <div>
                    @foreach ($posts as $post)
                        <div class="card border-0 shadow-sm mb-4 animate-on-scroll">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="d-flex">
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($post->user->name) }}"
                                            class="rounded-circle me-3" width="50" height="50"
                                            alt="{{ $post->user->name }}">
                                        <div>
                                            <h5 class="fw-bold mb-0">{{ $post->user->name }}</h5>
                                            <p class="text-muted mb-0 small">Posted {{ $post->created_at->diffForHumans() }}
                                            </p>
                                        </div>
                                    </div>
                                    <button class="btn btn-light">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                </div>

                                <p class="mb-3">
                                    {{ $post->content }}
                                </p>

                                @if ($post->image_url)
                                    <div class="ratio ratio-16x9 bg-primary rounded mb-3">
                                        <div class="d-flex align-items-center justify-content-center h-100">
                                            <i class="fas fa-camera text-white fs-1"></i>
                                        </div>
                                    </div>
                                @endif

                                <div class="d-flex text-muted small mb-3">
                                    <span class="me-3">{{ $post->likes_count }} likes</span>
                                    <span>{{ $post->comments_count }} comments</span>
                                </div>

                                <div class="d-flex border-top border-bottom border-light py-2 mb-3">
                                    <form action="{{ route('posts.like', $post) }}" method="POST" class="flex-grow-1">
                                        @csrf
                                        <button type="submit" class="btn btn-light w-100">
                                            <i class="far fa-heart me-2"></i> Like
                                        </button>
                                    </form>
                                    <button class="btn btn-light flex-grow-1 mx-2">
                                        <i class="far fa-comment me-2"></i> Comment
                                    </button>
                                    <button class="btn btn-light flex-grow-1">
                                        <i class="far fa-share-square me-2"></i> Share
                                    </button>
                                </div>

                                <div>
                                    @foreach ($post->comments as $comment)
                                        <div class="d-flex mb-3">
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($comment->user->name) }}"
                                                class="rounded-circle me-2" width="32" height="32"
                                                alt="{{ $comment->user->name }}">
                                            <div class="bg-light rounded p-3 flex-grow-1">
                                                <h6 class="fw-bold mb-1">{{ $comment->user->name }}</h6>
                                                <p class="mb-0">{{ $comment->content }}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="d-flex">
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'You') }}"
                                            class="rounded-circle me-2" width="32" height="32" alt="You">
                                        <div class="flex-grow-1">
                                            <form action="{{ route('posts.comment', $post) }}" method="POST">
                                                @csrf
                                                <input type="text" name="content" placeholder="Write a comment..."
                                                    class="form-control">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Trending Topics -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Trending Topics</h5>
                        <div>
                            <a href="#" class="d-block p-2 rounded text-decoration-none mb-2">
                                <span class="fw-bold text-primary">#AfghanistanTourism</span>
                                <span class="text-muted d-block">1.2K posts</span>
                            </a>
                            <a href="#" class="d-block p-2 rounded text-decoration-none mb-2">
                                <span class="fw-bold text-primary">#BamiyanValley</span>
                                <span class="text-muted d-block">856 posts</span>
                            </a>
                            <a href="#" class="d-block p-2 rounded text-decoration-none mb-2">
                                <span class="fw-bold text-primary">#Band_e_Amir</span>
                                <span class="text-muted d-block">642 posts</span>
                            </a>
                            <a href="#" class="d-block p-2 rounded text-decoration-none mb-2">
                                <span class="fw-bold text-primary">#Kabul</span>
                                <span class="text-muted d-block">521 posts</span>
                            </a>
                            <a href="#" class="d-block p-2 rounded text-decoration-none">
                                <span class="fw-bold text-primary">#AfghanCulture</span>
                                <span class="text-muted d-block">433 posts</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Suggested Users -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Suggested Travelers</h5>
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=John+Doe" class="rounded-circle me-2"
                                        width="40" height="40" alt="John Doe">
                                    <div>
                                        <h6 class="fw-bold mb-0">John Doe</h6>
                                        <p class="text-muted mb-0 small">Traveler from USA</p>
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary btn-sm">
                                    Follow
                                </button>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Marie+Dubois" class="rounded-circle me-2"
                                        width="40" height="40" alt="Marie Dubois">
                                    <div>
                                        <h6 class="fw-bold mb-0">Marie Dubois</h6>
                                        <p class="text-muted mb-0 small">Traveler from France</p>
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary btn-sm">
                                    Follow
                                </button>
                            </div>

                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Takashi+Yamamoto"
                                        class="rounded-circle me-2" width="40" height="40"
                                        alt="Takashi Yamamoto">
                                    <div>
                                        <h6 class="fw-bold mb-0">Takashi Yamamoto</h6>
                                        <p class="text-muted mb-0 small">Traveler from Japan</p>
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary btn-sm">
                                    Follow
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
