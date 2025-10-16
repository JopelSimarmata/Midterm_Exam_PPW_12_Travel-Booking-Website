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
        // User::factory(10)->create();

        \App\Models\Destinasi::insert([
            [
                'nama' => 'Silangit - Jakarta',
                'harga' => 1000000,
                'maskapai' => 'Air Asia',

            ],
            [
                'nama' => 'Silangit-Medan',
                'harga' => 500000,
                'maskapai' => 'Citilink',

            ],
            [
                'nama' => 'Silangit-Batam',
                'harga' => 300000,
                'maskapai' => 'Garuda',

            ],
            [
                'nama' => 'Silangit-Bali',
                'harga' => 3000000,
                'maskapai' => 'Super Air Jet',

            ],
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
