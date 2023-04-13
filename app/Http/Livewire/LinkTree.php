<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\staff;
use Astrotomic\Vcard\Properties\Email;
use Astrotomic\Vcard\Properties\Kind;
use Astrotomic\Vcard\Properties\Tel;
use Astrotomic\Vcard\Vcard;
use Livewire\WithFileUploads;


class LinkTree extends Component
{
    use WithFileUploads;
    public $staff, $slug, $position, $vcard, $name, $email, $phone, $photo, $title, $formatter;

    public function mount($id)
    {
        $staff_info = staff::findOrFail($id);
        $this->staff = $staff_info;
        $this->position();
    }

    public function position()
    {

        $position = $this->staff->position;

        if ($position == 1) {
            $this->position = 'Staff';
        } elseif ($position == 2) {
            $this->position = 'Admin';
        } elseif ($position == 3) {
            $this->position = 'Owner';
        }
    }

    public function vcard()
    {
        Vcard::make()
    ->kind(Kind::INDIVIDUAL)
    ->fullName($this->staff->name)
    ->email($this->staff->email, [Email::INTERNET])
    ->tel($this->staff->phone, [Tel::CELL])
    ->title($this->staff->position);
    }

    public function render()
    {
        return view('livewire.linkTree')->layout('layouts.staff');
    }
}
