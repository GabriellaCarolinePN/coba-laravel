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
     */
    public function run(): void
    {
        
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Gabriella Caroline',
        //     'email' => 'gabriella@gmail.com',
        //     'password' => 'bcrypt(12345)',
        // ]);
        
        // User::create([
        //     'name' => 'Prihayu Ningsih',
        //     'email' => 'ningsih@gmail.com',
        //     'password' => 'bcrypt(11111)',
        // ]);

        User::factory(3)->create(); //Melakukan seeding dgn 10 data User palsu otomatis

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint impedit  magni eveniet, quaerat nobis numquam quidem quisquam dolore, deleniti quia facilis, dolor nam fugiat repellat eius tempore nemo laboriosam id illo sapiente sit itaque asperiores.</p><p>Hic a laudantium amet alias officiis tempora harum illum commodi blanditiis perspiciatis excepturi dignissimos quidem, voluptas possimus dolor, odit voluptatibus libero sed repudiandae, molestiae dolorem numquam delectus! Dolorum omnis minima veniam! Sit.</p><p>enim possimus sint quidem quisquam illo id minus optio, rerum illum vero corrupti debitis quaerat! Voluptatum enim ab similique unde ex deserunt distinctio illo, hic quaerat placeat eos aliquid rerum nesciunt, impedit in.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint impedit  magni eveniet, quaerat nobis numquam quidem quisquam dolore, deleniti quia facilis, dolor nam fugiat repellat eius tempore nemo laboriosam id illo sapiente sit itaque asperiores.</p><p>Hic a laudantium amet alias officiis tempora harum illum commodi blanditiis perspiciatis excepturi dignissimos quidem, voluptas possimus dolor, odit voluptatibus libero sed repudiandae, molestiae dolorem numquam delectus! Dolorum omnis minima veniam! Sit.</p><p>enim possimus sint quidem quisquam illo id minus optio, rerum illum vero corrupti debitis quaerat! Voluptatum enim ab similique unde ex deserunt distinctio illo, hic quaerat placeat eos aliquid rerum nesciunt, impedit in.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint impedit  magni eveniet, quaerat nobis numquam quidem quisquam dolore, deleniti quia facilis, dolor nam fugiat repellat eius tempore nemo laboriosam id illo sapiente sit itaque asperiores.</p><p>Hic a laudantium amet alias officiis tempora harum illum commodi blanditiis perspiciatis excepturi dignissimos quidem, voluptas possimus dolor, odit voluptatibus libero sed repudiandae, molestiae dolorem numquam delectus! Dolorum omnis minima veniam! Sit.</p><p>enim possimus sint quidem quisquam illo id minus optio, rerum illum vero corrupti debitis quaerat! Voluptatum enim ab similique unde ex deserunt distinctio illo, hic quaerat placeat eos aliquid rerum nesciunt, impedit in.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint impedit  magni eveniet, quaerat nobis numquam quidem quisquam dolore, deleniti quia facilis, dolor nam fugiat repellat eius tempore nemo laboriosam id illo sapiente sit itaque asperiores.</p><p>Hic a laudantium amet alias officiis tempora harum illum commodi blanditiis perspiciatis excepturi dignissimos quidem, voluptas possimus dolor, odit voluptatibus libero sed repudiandae, molestiae dolorem numquam delectus! Dolorum omnis minima veniam! Sit.</p><p>enim possimus sint quidem quisquam illo id minus optio, rerum illum vero corrupti debitis quaerat! Voluptatum enim ab similique unde ex deserunt distinctio illo, hic quaerat placeat eos aliquid rerum nesciunt, impedit in.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
    }
}
