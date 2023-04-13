<?php

namespace App\Http\Livewire;

use App\Models\ContactForm;
use Livewire\Component;

class ContactFormComponent extends Component
{
    public $name, $email, $phone, $date, $city, $state, $message;

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required|date',
            'city' => 'required',
            'state' => 'required',
            'message' => 'required',
        ]);

        ContactForm::create($validatedData);

        $this->reset(['name', 'email', 'phone', 'date', 'city', 'state', 'message']);
        session()->flash('message', 'Contact form submitted successfully.');
    }

    public function render()
    {
        return view('livewire.contact-form-component');
    }
}
