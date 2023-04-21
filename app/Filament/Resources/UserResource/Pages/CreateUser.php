<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Mail\WelcomeEmail;
use Filament\Notifications\Notification;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;


class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
    public $email;
    protected function getTitle(): string
    {
        return trans('filament-user::user.resource.title.create');
    }

    protected function afterCreate(): void
    {
        $token = Str::random(60);
        DB::table('password_resets')->insert([
            'email' => $this->record->email,
            'token' => Hash::make($token),
            'created_at' => now(),
        ]);

        Mail::to($this->record->email)->send(new WelcomeEmail([
            'name' => $this->record->name,
            'email' => $this->record->email,
            'token' => $token,]));
    }
}
