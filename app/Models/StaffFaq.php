<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kenepa\ResourceLock\Models\Concerns\HasLocks;
use OwenIt\Auditing\Contracts\Auditable;

class StaffFaq extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable, HasLocks;

    protected $fillable = [
        'category_id',
        'author',
        'question',
        'answer'
    ];

    public function category()
    {
        return $this->belongsTo(StaffFaqCategory::class);
    }
}
