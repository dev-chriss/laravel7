<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Post;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);

        factory(User::class, 2)
            ->create()
            ->each(function ($user) {
                factory(Post::class, 2)
                    ->create([
                        'user_id' => $user->id
                    ])
                    ->each(function ($post) {
                        factory(Comment::class, 2)
                            ->create([
                                'post_id' => $post->id
                            ]);
                    });
            });
    }
}
