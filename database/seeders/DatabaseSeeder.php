<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Tag::factory(10)->create();
        $this->seedFakeDataForProfileAndPost("\App\Models\Profile");
        $this->seedFakeDataForProfileAndPost("\App\Models\Post");

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

    protected function seedFakeDataForProfileAndPost($model)
    {
        $user = User::all();
        $user->each(function ($user) use ($model) {
            $model::factory()->create([
                'user_id' => $user->id,
            ]);
        });
    }

    protected function seedPostTagDataa()
    {
        $posts = Post::all();
        $tags = Tag::all();
        $posts->each(function ($post) {

        });
    }
}
