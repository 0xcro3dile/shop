<?php

use App\Address;
use App\Category;
use App\Image;
use App\Product;
use App\Review;
use App\Role;
use App\Tag;
use App\Ticket;
use Illuminate\Database\Seeder;
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
        // $this->call(UsersTableSeeder::class);
        //factory(Image::class,44 )->create();
        //factory(Product::class,120 )->create();
        //factory(User::class,50)->create();
        //factory(Review::class,20)->create();
        //factory(Tag::class,40)->create();
       // factory(Category::class,50)->create();
        //factory(Tag::class,90)->create();
        factory(Ticket::class,90)->create();


    }
}
