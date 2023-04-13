<?php

namespace Database\Seeders;

use App\Models\ImageGalleryCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageGalleryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Productions',
            'Corporate Events',
            'Live Steams',
            'Installs'
        ];

        foreach ($categories as $category) {
            ImageGalleryCategory::create(['name' => $category]);
        }
    }
}
