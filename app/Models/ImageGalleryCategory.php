<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageGalleryCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public function image()
    {

        return $this->hasMany(ImageGallery::class);
    }
    public function images()
    {
        return $this->belongsToMany(ImageGallery::class, 'image_gallery_category_image');
    }
}
