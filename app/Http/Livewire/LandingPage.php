<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class LandingPage extends Component
{
    public $email = '';

    public function subscribe()
    {
        // Log::debug($this->email);
        $subscriber = Subscriber::create([
            'email' => $this->email,
        ]);

        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.landing-page');
    }
}
