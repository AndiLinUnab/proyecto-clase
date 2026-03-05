<?php

namespace Database\Seeders;

use App\Models\CartItem;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //Product::factory(50)->create();
        //Category::factory(10)->create();
        //User::factory(20)->create();
        CartItem::factory(90)->create();
    }
}
