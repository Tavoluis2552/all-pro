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
        $products = [
            [
                'name' => 'Laptop Lenovo ThinkPad',
                'description' => 'Laptop empresarial con procesador Intel i7 y 16GB RAM',
                'price' => 4500.00,
            ],
            [
                'name' => 'Mouse Logitech MX Master',
                'description' => 'Mouse inalámbrico ergonómico para productividad',
                'price' => 350.50,
            ],
            [
                'name' => 'Teclado Mecánico Redragon',
                'description' => 'Teclado mecánico con switches rojos y retroiluminación RGB',
                'price' => 280.99,
            ],
            [
                'name' => 'Monitor Samsung 27"',
                'description' => 'Monitor Full HD de 27 pulgadas para oficina y gaming',
                'price' => 1200.00,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
