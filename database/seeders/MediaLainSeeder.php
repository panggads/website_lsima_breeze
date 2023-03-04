<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MediaLain;

class MediaLainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $media_lain = [
            [
                'judul' => 'Contoh Judul 1',
                'tanggal' => '2022-02-28',
                'sumber' => 'Contoh Sumber 1',
                'cover' => 'https://via.placeholder.com/150x150.png?text=Cover+1',
            ],
            [
                'judul' => 'Contoh Judul 2',
                'tanggal' => '2022-02-27',
                'sumber' => 'Contoh Sumber 2',
                'cover' => 'https://via.placeholder.com/150x150.png?text=Cover+2',
            ],
            [
                'judul' => 'Contoh Judul 3',
                'tanggal' => '2022-02-26',
                'sumber' => 'Contoh Sumber 3',
                'cover' => 'https://via.placeholder.com/150x150.png?text=Cover+3',
            ],
            [
                'judul' => 'Contoh Judul 4',
                'tanggal' => '2022-02-25',
                'sumber' => 'Contoh Sumber 4',
                'cover' => 'https://via.placeholder.com/150x150.png?text=Cover+4',
            ],
            [
                'judul' => 'Contoh Judul 5',
                'tanggal' => '2022-02-24',
                'sumber' => 'Contoh Sumber 5',
                'cover' => 'https://via.placeholder.com/150x150.png?text=Cover+5',
            ]
        ];

        foreach ($media_lain as $media) {
            MediaLain::create($media);
        }
    }
}
