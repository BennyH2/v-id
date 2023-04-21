<?php

namespace App\Http\Livewire;

use App\Models\ImageGallery;
use App\Models\ImageGalleryCategory;
use App\Settings\FrontEnd;
use Livewire\Component;
use Str;

class Home extends Component
{
    public $images, $categories, $favicon, $brochure;

    public function mount(FrontEnd $settings)
    {
        $this->favicon = $settings->favicon;
        $this->brochure = $settings->brochure;
        $this->categories = ImageGalleryCategory::all();
        $this->images = $this->prepareImages();
    }

    public function prepareImages()
    {
        $images = ImageGallery::with('categories')->get();

        // Map the images to include the category classes and media URL
        $images = $images->map(function ($image) {
            $image->categoryClasses = $image->categories->map(fn ($category) => Str::slug($category->name))->implode(' ');
            $image->categoryData = $image->categories->map(fn ($category) => Str::slug($category->name))->implode(' ');
            $media = $image->getFirstMediaUrl('gallery', 'preview');
            $image->previewImageUrl = $media ? $media : '';
            
            return $image;
        });

        return $images;
    }


    public function render()
    {
        return view('livewire.Home')->layout('layouts.Home');
    }
}
