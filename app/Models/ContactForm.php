<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kenepa\ResourceLock\Models\Concerns\HasLocks;
use OwenIt\Auditing\Contracts\Auditable;

class ContactForm extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable, HasLocks;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'city',
        'state',
        'message',
        'eml_status',
        'fol_status',
    ];
}
