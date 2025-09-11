@extends('bootstrap-layout')

@section('title', 'Messages - Afghanistan Tourism')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5 fw-bold mb-4">Messages</h1>
                <p class="lead text-muted mb-5">Connect with other travelers and Afghan locals</p>
            </div>
        </div>

        <div class="row">
            <!-- Users List -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4">Contacts</h5>
                        <div class="list-group">
                            @foreach ($users as $user)
                                <a href="{{ route('messages.show', $user) }}"
                                    class="list-group-item list-group-item-action d-flex align-items-center mb-2 rounded">
                                    <img class="rounded-circle me-3" width="40" height="40"
                                        src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}"
                                        alt="{{ $user->name }}">
                                    <div>
                                        <p class="mb-0 fw-bold">{{ $user->name }}</p>
                                        <p class="text-muted mb-0 small">Click to message</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Admin Broadcast Form -->
                @if (auth()->user()->is_admin)
                    <div class="card border-0 shadow-sm mt-4">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-4">Broadcast Message</h5>
                            <form action="{{ route('messages.broadcast') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <textarea name="content" rows="3" class="form-control" placeholder="Send a message to all users..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">
                                    Send to All Users
                                </button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Messages List -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4">Recent Messages</h5>

                        @if ($messages->count() > 0)
                            <div class="">
                                @foreach ($messages as $message)
                                    <div class="card mb-3 border-0 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <img class="rounded-circle me-3" width="40" height="40"
                                                    src="https://ui-avatars.com/api/?name={{ urlencode($message->sender->name) }}"
                                                    alt="{{ $message->sender->name }}">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-0 fw-bold">{{ $message->sender->name }}</p>
                                                        <p class="text-muted mb-0 small">
                                                            {{ $message->created_at->diffForHumans() }}</p>
                                                    </div>

                                                    @if ($message->is_broadcast)
                                                        <span class="badge bg-warning text-dark mt-1">
                                                            Broadcast Message
                                                        </span>
                                                    @endif

                                                    <p class="text-muted mt-2 mb-0">{{ $message->content }}</p>

                                                    @if (!$message->is_broadcast && $message->recipient_id == auth()->id())
                                                        <div class="mt-2">
                                                            <a href="{{ route('messages.show', $message->sender) }}"
                                                                class="btn btn-sm btn-outline-primary">
                                                                Reply
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-5">
                                <i class="bi bi-envelope-open-text fs-1 text-muted mb-3"></i>
                                <h5 class="fw-bold">No messages yet</h5>
                                <p class="text-muted">Select a contact to start a conversation.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
