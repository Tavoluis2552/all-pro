<?php

namespace Database\Seeders;

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
        // En este caso no use "User::factory(10)->create();" porque solamente quiero un usuario o yo mismo agregare manualmente

        User::factory()->create([
            'name' => 'Tavo',
            'email' => 'tavo@gmail.com',
        ]);

        /**
         * Con respecto a product en esta ocasión quiere ver mis 4 productos creados en ProductSeeder
         * El "Product::factory(10)->create();" sera para hacer pruebas en otra ocasión pero sirve para creador datos faker
         */

        $this->call([
            ProductSeeder::class,
        ]);
        

    }
}
