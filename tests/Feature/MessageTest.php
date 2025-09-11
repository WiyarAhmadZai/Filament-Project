<?php

namespace Tests\Feature;

use App\Models\Message;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MessageTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_messages(): void
    {
        $user = User::factory()->create();
        $otherUser = User::factory()->create();
        
        $message = Message::factory()->create([
            'sender_id' => $otherUser->id,
            'recipient_id' => $user->id,
            'content' => 'Hello, this is a test message!',
        ]);

        $response = $this->actingAs($user)->get('/messages');

        $response->assertStatus(200);
        $response->assertSee('Hello, this is a test message!');
    }

    public function test_user_can_send_message(): void
    {
        $user = User::factory()->create();
        $recipient = User::factory()->create();

        $response = $this->actingAs($user)->post('/messages', [
            'recipient_id' => $recipient->id,
            'content' => 'This is a test message',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('messages', [
            'sender_id' => $user->id,
            'recipient_id' => $recipient->id,
            'content' => 'This is a test message',
        ]);
    }

    public function test_admin_can_broadcast_message(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        $response = $this->actingAs($admin)->post('/messages/broadcast', [
            'content' => 'This is a broadcast message to all users',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHas('success');

        // Check that broadcast messages were created for all users
        $this->assertDatabaseHas('messages', [
            'sender_id' => $admin->id,
            'recipient_id' => $user1->id,
            'content' => 'This is a broadcast message to all users',
            'is_broadcast' => true,
        ]);

        $this->assertDatabaseHas('messages', [
            'sender_id' => $admin->id,
            'recipient_id' => $user2->id,
            'content' => 'This is a broadcast message to all users',
            'is_broadcast' => true,
        ]);
    }

    public function test_non_admin_cannot_broadcast_message(): void
    {
        $user = User::factory()->create(['is_admin' => false]);

        $response = $this->actingAs($user)->post('/messages/broadcast', [
            'content' => 'This should fail',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHas('error');
    }
}