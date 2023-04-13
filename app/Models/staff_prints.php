<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kenepa\ResourceLock\Models\Concerns\HasLocks;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class staff_prints extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasLocks;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'staff_id',
        'is_active',
    ];

    public function staff()
    {
        return $this->belongsTo(staff::class);
    }

    protected $casts = [
        'is_admin' => 'boolean',
    ];

}
