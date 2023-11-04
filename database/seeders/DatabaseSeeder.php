<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();
        $user= User::factory()->create([
            'name'=>'antoine',
            'email'=>'antoine@gmail.com'
        ]);

        Article::factory(10)->create([
            'user_id'=>$user->id
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    //     Article::create(
    //         ['title'  => 'Laravel Developer ',
    //     'author'=> ' laravel, Javasicript',
    //     'year'=> '2022 ',
    //     'journal'=> ' Mp report',
    //     'doi' => 'mmddmmdmmmd ',
    //     'abstract'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora incidunt consequatur, ex blanditiis nulla hic cumque possimus molestiae inventore ipsa quas, in, fugit dignissimos reprehenderit iste et vitae accusantium soluta.
    //     ',
    //     'volume'=> '10 ',
    //     'pages'=> ' 20-27'
    //     ]);
        
    //     Article::create(     ['title'  => 'Laravuggel Developer ',
    //     'author'=> ' larav, Javasicript',
    //     'year'=> '202222 ',
    //     'journal'=> ' Mp hgrtreport',
    //     'doi' => 'mmddmmmd ',
    //     'abstract'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora incidunt consequatur, ex blanditiis nulla hic cumque possimus molestiae inventore ipsa quas, in, fugit dignissimos reprehenderit iste et vitae accusantium soluta.
    //     ',
    //     'volume'=> '1000 ',
    //     'pages'=> ' 2000-2700'
    //     ]
        
    // );


    }
}
