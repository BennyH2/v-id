<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('FrontEnd.favicon', 'favicon/favicon.svg');
        $this->migrator->add('FrontEnd.terms_conditions', '<h1>Terms & Conditions</h1>');
        $this->migrator->add('FrontEnd.privacy_policy', '<h1>Privacy Policy</h1>');
        $this->migrator->add('FrontEnd.brochure', 'brodchure/brodchure.pdf');
    }
};