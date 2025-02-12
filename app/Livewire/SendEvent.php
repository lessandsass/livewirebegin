<?php

namespace App\Livewire;

use Livewire\Component;

class SendEvent extends Component
{

    public function sendMessage()
    {
        $this->dispatch('messageSent');
    }

    public function render()
    {
        return view('livewire.send-event');
    }
}
