<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class FrontEnd extends Settings
{   
    public string $favicon;

    public string $terms_conditions;

    public string $privacy_policy;

    public string $brochure;

    public static function group(): string
    {
        return 'FrontEnd';
    }
}