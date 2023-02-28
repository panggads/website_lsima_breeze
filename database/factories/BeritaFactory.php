<?php

namespace Database\Factories;
use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    protected $model = Berita::class;

    public function definition()
    {
        return [
            // Define the fields for the Berita model here
            'judul' => $this->faker->sentence,
            'penulis' => $this->faker->sentence,
            'isi' => $this->faker->paragraphs(3, true),
            'tanggal' => $this->faker->date('Y-m-d'),
            'dibaca' => $this->faker->numberBetween(0,50),
        ];
    }
}
