<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            Owner::create([
                'code' => fake()->lexify('usr-????'),
                'name' => fake()->firstName(),
            ]);
        }
    }
}
