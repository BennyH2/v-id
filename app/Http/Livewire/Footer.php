<?php

namespace App\Http\Livewire;

use App\Settings\FrontEnd;
use Livewire\Component;

class Footer extends Component
{
    public $terms_conditions, $privacy_policy;

    public function mount(FrontEnd $settings)
    {
            $this->terms_conditions = $settings->terms_conditions;
            $this->privacy_policy = $settings->privacy_policy;
    }

    public function render()
    {
        return view('livewire.footer')->layout('layouts.footer');
    }
}
