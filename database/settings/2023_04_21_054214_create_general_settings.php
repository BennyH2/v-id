<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('FrontEnd.favicon', '');
        $this->migrator->add('FrontEnd.terms_conditions', '');
        $this->migrator->add('FrontEnd.privacy_policy', '');
        $this->migrator->add('FrontEnd.brochure', '');
    }
};