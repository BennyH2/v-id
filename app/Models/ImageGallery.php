<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ImageGallery extends Model implements Auditable, HasMedia
{
    use HasFactory, \OwenIt\Auditing\Auditable, InteractsWithMedia;

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 370, 311)
            ->nonQueued();
    }
    protected $fillable = [
        'name',
        'project',
        'credit_to',
        'client',
        'description',
    ];

    public function categories()
{
    return $this->belongsToMany(ImageGalleryCategory::class, 'image_gallery_category_image');
}
}
