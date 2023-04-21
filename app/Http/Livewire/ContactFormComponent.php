<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormEmail;
use App\Models\ContactForm;
use Exception;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use App\Models\User;



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
    
        // Save the contact form data in the database
        $contactForm = ContactForm::create($validatedData);
    
        // Get all users with the 'get_contact_email' permission
        $users = User::permission('get_contact_email')->get();
    
        try {
            // Send the contact form email to all users with the 'get_contact_email' permission
            foreach ($users as $user) {
                Mail::to($user->email)->send(new ContactFormEmail($validatedData));
            }
            // Update the eml_status field to 'sent'
            $contactForm->update(['eml_status' => 'sent']);
        } catch (Exception $e) {
            // Update the eml_status field to 'error'
            $contactForm->update(['eml_status' => 'error']);
        }
    
        // Reset the form fields
        $this->reset(['name', 'email', 'phone', 'date', 'city', 'state', 'message']);
        session()->flash('message', 'Contact form submitted successfully.');
    }
    

    public function render()
    {
        return view('livewire.contact-form-component');
    }
}
