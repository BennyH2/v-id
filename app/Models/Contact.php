<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kenepa\ResourceLock\Models\Concerns\HasLocks;

class Contact extends Model
{
    use HasFactory, HasLocks;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'city'.
        'state',
        'body',
        'status',
        'send',
    ];
}
