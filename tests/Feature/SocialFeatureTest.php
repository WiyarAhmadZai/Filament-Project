<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Follower;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class SocialFeatureTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    public function test_user_can_create_post()
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();

        $response = $this->actingAs($user)->post('/posts', [
            'title' => 'Test Post',
            'content' => 'This is a test post content',
            'color' => 'blue',
            'slug' => 'test-post',
            'category_id' => $category->id,
        ]);

        $response->assertStatus(302); // Redirect back
        $this->assertDatabaseHas('posts', [
            'title' => 'Test Post',
            'user_id' => $user->id,
        ]);
    }

    public function test_user_can_comment_on_post()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create();

        $response = $this->actingAs($user)->post("/posts/{$post->id}/comments", [
            'content' => 'This is a test comment',
        ]);

        $response->assertStatus(302); // Redirect back
        $this->assertDatabaseHas('comments', [
            'content' => 'This is a test comment',
            'user_id' => $user->id,
            'post_id' => $post->id,
        ]);
    }

    public function test_user_can_like_post()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create();

        $response = $this->actingAs($user)->post("/posts/{$post->id}/like");

        $response->assertStatus(302); // Redirect back
        $this->assertDatabaseHas('likes', [
            'user_id' => $user->id,
            'post_id' => $post->id,
        ]);
    }

    public function test_user_can_follow_another_user()
    {
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        $response = $this->actingAs($user1)->post("/users/{$user2->id}/follow");

        $response->assertStatus(302); // Redirect back
        $this->assertDatabaseHas('followers', [
            'follower_id' => $user1->id,
            'following_id' => $user2->id,
        ]);
    }

    public function test_user_can_view_community_feed()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/community');

        $response->assertStatus(200);
        $response->assertSee('Afghanistan Tourism Community');
    }

    public function test_user_can_view_videos()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/community/videos');

        $response->assertStatus(200);
        $response->assertSee('Community Videos');
    }
}