<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
           User::create([
               'name' => 'Natasya Alvianita',
               'username' => 'natasyaalvianita',
               'email' => 'natasya25@gmail.com',
                'password' => bcrypt('password')
            ]);

            //User::create([
              //  'name' => 'Nining Susilowati',
                //'email' => 'ninig225@gmail.com',
                //'password' => bcrypt('09876')
            //]);
            
            User::factory(3)->create();

            Category::create([
                'name' => 'Web Programming',
                'slug' => 'web-programming'
            ]);

            
            Category::create([
              'name' => 'Web Design',
              'slug' => 'web-design'
          ]);

            Category::create([
                'name' => 'Personal',
                'slug' => 'personal'
            ]);


            
            Post::factory(20)->create();

            //Post::create([
              //  'title' => 'Judul Pertama',
                //'slug' => 'judul-pertama',
                //'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptates aperiam vel eaque. At, alias. Eos est voluptas commodi nam iusto autem, blanditiis quo vitae provident molestias doloribus quaerat eligendi.',
                //'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium architecto repellendus voluptatem similique, reiciendis eius cumque autem dolores ullam odio nisi quas necessitatibus iusto.',
                //'category_id' => 1,
                //'user_id' => 1

            //]);

            // Post::create([
            //     'title' => 'Judul Ke Dua',
            //     'slug' => 'judul-ke-dua',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptates aperiam vel eaque. At, alias. Eos est voluptas commodi nam iusto autem, blanditiis quo vitae provident molestias doloribus quaerat eligendi.',
            //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium architecto repellendus voluptatem similique, reiciendis eius cumque autem dolores ullam odio nisi quas necessitatibus iusto.',
            //     'category_id' => 1,
            //     'user_id' => 1

            // ]);

            // Post::create([
            //     'title' => 'Judul Ke Tiga',
            //     'slug' => 'judul-ke-tiga',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptates aperiam vel eaque. At, alias. Eos est voluptas commodi nam iusto autem, blanditiis quo vitae provident molestias doloribus quaerat eligendi.',
            //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium architecto repellendus voluptatem similique, reiciendis eius cumque autem dolores ullam odio nisi quas necessitatibus iusto.',
            //     'category_id' => 2,
            //     'user_id' => 1

            // ]);

            // Post::create([
            //     'title' => 'Judul Ke Empat',
            //     'slug' => 'judul-ke-empat',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptates aperiam vel eaque. At, alias. Eos est voluptas commodi nam iusto autem, blanditiis quo vitae provident molestias doloribus quaerat eligendi.',
            //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium architecto repellendus voluptatem similique, reiciendis eius cumque autem dolores ullam odio nisi quas necessitatibus iusto.',
            //     'category_id' => 2,
            //     'user_id' => 2

            // ]);
    }
}
