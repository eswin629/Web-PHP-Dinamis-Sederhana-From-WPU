<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
        User::create([
            'name'=>'Eswin Napitupulu',
            'username' => 'Eswin',
            'email'=>'Eswin@gmail.com',
            'password'=>bcrypt('12345')
        ]);

        // User::create([
        //     'name'=>'Jack Marpaung',
        //     'email'=>'Jack@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name'=>'Web Programing',
            'slug'=>'web programing'
        ]);

        Category::create([
            'name'=>'Web Design',
            'slug'=>'web design'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet.',
        //     'body'=>'<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, quidem.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum sequi vel quisquam id eaque pariatur magni accusamus soluta enim vitae.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt odio dolor assumenda quos, reiciendis enim maiores quam maxime iste cupiditate minima blanditiis, reprehenderit quibusdam asperiores! Dolor sint excepturi rerum reprehenderit?</p>',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet.',
        //     'body'=>'<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, quidem.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum sequi vel quisquam id eaque pariatur magni accusamus soluta enim vitae.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt odio dolor assumenda quos, reiciendis enim maiores quam maxime iste cupiditate minima blanditiis, reprehenderit quibusdam asperiores! Dolor sint excepturi rerum reprehenderit?</p>',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug'=>'judul ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet.',
        //     'body'=>'<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, quidem.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum sequi vel quisquam id eaque pariatur magni accusamus soluta enim vitae.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt odio dolor assumenda quos, reiciendis enim maiores quam maxime iste cupiditate minima blanditiis, reprehenderit quibusdam asperiores! Dolor sint excepturi rerum reprehenderit?</p>',
        //     'category_id'=>2,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Keempat',
        //     'slug'=>'judul keempat',
        //     'excerpt'=>'Lorem ipsum dolor sit amet.',
        //     'body'=>'<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, quidem.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum sequi vel quisquam id eaque pariatur magni accusamus soluta enim vitae.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt odio dolor assumenda quos, reiciendis enim maiores quam maxime iste cupiditate minima blanditiis, reprehenderit quibusdam asperiores! Dolor sint excepturi rerum reprehenderit?</p>',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);
    }
}
