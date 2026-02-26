<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $product1 = new Product();
        $product1->name = 'Tarjeta Gráfica';
        $product1->description = 'Esta es la descripcion de la tarjeta gráfica';
        $product1->price = 900;
        $product1->category_id = Category::inRandomOrder()->first()->id;

        $product1->save();

        $product2 = new Product();
        $product2->name = 'Mouse';
        $product2->description = 'Esta es la descripcion del mouse';
        $product2->price = 170;
        $product2->category_id = Category::inRandomOrder()->first()->id;
        
        $product2->save();

        $product3 = new Product();
        $product3->name = 'Teclado';
        $product3->description = 'Esta es la descripcion del teclado';
        $product3->price = 300;
        $product3->category_id = Category::inRandomOrder()->first()->id;
        
        $product3->save();
    }
}
