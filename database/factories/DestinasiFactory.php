<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destinasi>
 */
class DestinasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->city . ' - ' . $this->faker->city,
            'harga' => $this->faker->numberBetween(100000, 1000000),
            'maskapai' => $this->faker->sentence(8),
            'gambar' => $this->faker->imageUrl(200, 200, 'travel', true, 'destinasi'),
            // Jika ada kolom durasi di tabel, tambahkan:
            // 'durasi' => $this->faker->numberBetween(1, 10) . ' jam',
        ];
    }
}
