<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Blog\Models\Post;
use Modules\User\Models\User;

class BlogSeeder extends Seeder
{
    public function run()
    {
        //$user = User::first(); // picks from User module table
       // if ($user) {
            Post::create([
                'title' => 'Hello World',
                'body' => 'My first modular post.',
                'user_id' => 1, // links to User module
            ]);
      //  }
    }
}
