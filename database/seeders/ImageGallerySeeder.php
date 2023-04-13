<?php

namespace Database\Seeders;

use App\Models\ImageGallery;
use App\Models\ImageGalleryCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'name' => 'Temp Imgage 1',
                'project' => 'Project 1',
                'credit_to' => 'John Doe',
                'client' => 'Client 1',
                'description' => 'Sample description for Image 1',
                'categories' => [1, 2]
            ],
            [
                'name' => 'Temp Imgage 2',
                'project' => 'Project 2',
                'credit_to' => 'John Doe',
                'client' => 'Client 1',
                'description' => 'Sample description for Image 2',
                'categories' => [1, 4]
            ],
            [
                'name' => 'Temp Imgage 3',
                'project' => 'Project 3',
                'credit_to' => 'John Doe',
                'client' => 'Client 2',
                'description' => 'Sample description for Image 3',
                'categories' => [1, 3]
            ],
            // Add more images here...
        ];

        foreach ($images as $imageData) {
            $categories = ImageGalleryCategory::whereIn('id', $imageData['categories'])->get();

            // Remove the 'categories' attribute from the image data
            unset($imageData['categories']);

            $image = new ImageGallery($imageData);
            $image->addMediaFromUrl('https://via.placeholder.com/800x600.png?text=Image+1')->toMediaCollection('gallery');
            $image->save();

            // Attach categories to the image
            $image->categories()->attach($categories);
        }
    }
}
