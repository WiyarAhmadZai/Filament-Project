@extends('bootstrap-layout')

@section('title', 'Conversation - Afghanistan Tourism')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="display-5 fw-bold mb-0">Messages</h1>
                    <a href="{{ route('messages.index') }}" class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left me-1"></i> Back to Messages
                    </a>
                </div>
                <p class="lead text-muted mb-5">Chat with {{ $user->name }}</p>
            </div>
        </div>

        <div class="row">
            <!-- Users List -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4">Contacts</h5>
                        <div class="list-group">
                            @foreach ($users as $contact)
                                <a href="{{ route('messages.show', $contact) }}"
                                    class="list-group-item list-group-item-action d-flex align-items-center mb-2 rounded {{ $contact->id == $user->id ? 'active' : '' }}">
                                    <img class="rounded-circle me-3" width="40" height="40"
                                        src="https://ui-avatars.com/api/?name={{ urlencode($contact->name) }}"
                                        alt="{{ $contact->name }}">
                                    <div>
                                        <p class="mb-0 fw-bold">{{ $contact->name }}</p>
                                        <p class="text-muted mb-0 small">
                                            {{ $contact->id == $user->id ? 'Currently viewing' : 'Click to message' }}
                                        </p>
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

            <!-- Conversation -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <!-- Conversation Header -->
                    <div class="card-header bg-white border-bottom">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-3" width="50" height="50"
                                src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}"
                                alt="{{ $user->name }}">
                            <div>
                                <h5 class="mb-0 fw-bold">{{ $user->name }}</h5>
                                <p class="text-muted mb-0">Online</p>
                            </div>
                        </div>
                    </div>

                    <!-- Messages Container -->
                    <div class="card-body p-4" style="height: 500px; overflow-y: auto;" id="messages-container">
                        @if ($conversation->count() > 0)
                            <div class="">
                                @foreach ($conversation as $message)
                                    @if ($message->is_broadcast)
                                        <!-- Broadcast Message -->
                                        <div class="text-center my-4">
                                            <span class="badge bg-warning text-dark">
                                                <i class="bi bi-bullhorn me-1"></i> Admin Broadcast
                                            </span>
                                            <div class="card border-0 shadow-sm mt-3 mx-auto" style="max-width: 500px;">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <img class="rounded-circle me-2" width="40" height="40"
                                                            src="https://ui-avatars.com/api/?name={{ urlencode($message->sender->name) }}"
                                                            alt="{{ $message->sender->name }}">
                                                        <div class="flex-grow-1">
                                                            <div class="d-flex justify-content-between">
                                                                <p class="mb-0 fw-bold">
                                                                    {{ $message->sender->name }}</p>
                                                                <p class="text-muted mb-0 small">
                                                                    {{ $message->created_at->format('M d, Y h:i A') }}</p>
                                                            </div>
                                                            <p class="text-muted mt-2 mb-0">{{ $message->content }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($message->sender_id == auth()->id())
                                        <!-- Sent Message -->
                                        <div class="d-flex justify-content-end mb-4">
                                            <div class="card bg-primary text-white border-0" style="max-width: 70%;">
                                                <div class="card-body py-2 px-3">
                                                    <p class="mb-1">{{ $message->content }}</p>
                                                    <p class="mb-0 text-white-50 small text-end">
                                                        {{ $message->created_at->format('M d, Y h:i A') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <!-- Received Message -->
                                        <div class="d-flex justify-content-start mb-4">
                                            <div class="card border-0 shadow-sm" style="max-width: 70%;">
                                                <div class="card-body py-2 px-3">
                                                    <div class="d-flex">
                                                        <img class="rounded-circle me-2" width="30" height="30"
                                                            src="https://ui-avatars.com/api/?name={{ urlencode($message->sender->name) }}"
                                                            alt="{{ $message->sender->name }}">
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0 fw-bold">
                                                                {{ $message->sender->name }}</p>
                                                            <p class="text-muted mb-1">{{ $message->content }}</p>
                                                            <p class="text-muted mb-0 small">
                                                                {{ $message->created_at->format('M d, Y h:i A') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-5">
                                <i class="bi bi-chat-dots fs-1 text-muted mb-3"></i>
                                <h5 class="fw-bold">No messages yet</h5>
                                <p class="text-muted">Start a conversation with {{ $user->name }}.</p>
                            </div>
                        @endif
                    </div>

                    <!-- Message Input -->
                    <div class="card-footer bg-white border-top">
                        <form action="{{ route('messages.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="recipient_id" value="{{ $user->id }}">
                            <div class="input-group">
                                <input type="text" name="content" class="form-control"
                                    placeholder="Type your message..." required>
                                <button type="submit" class="btn btn-primary">
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Auto-scroll to bottom of messages -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const messagesContainer = document.getElementById('messages-container');
            if (messagesContainer) {
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
            }
        });
    </script>
@endsection
