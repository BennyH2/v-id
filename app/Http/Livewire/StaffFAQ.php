<?php

namespace App\Http\Livewire;

use App\Models\StaffFaq as staff;
use App\Models\staff as menu;
use Livewire\Component;

class StaffFAQ extends Component
{

    public $faqs, $staff;

    public function mount()
    {
        $this->faqs = Staff::with('category')->get();
        $this->staff = menu::all();
    }

    public function render()
    {
        return view('livewire.staff-f-a-q')->layout('layouts.staff');
    }
}
