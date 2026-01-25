<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * En esta ocasión usaremos el: Model::create() → dominio + infraestructura
     * porque esto sera un proyecto CRUD profesional con controllers, services, repositories y models
     * aparte que mi dominio importa y estoy pensando como arquitecto, no solo como "insertados de datos"
     */
    public function run(): void
    {
        Product::factory(100)->create();
    }
}
