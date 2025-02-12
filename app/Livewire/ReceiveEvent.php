<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class ReceiveEvent extends Component
{

    public string $message = 'Hello';

    #[On('messageSent')]
    public function displayMessage()
    {
        $this->message = 'Hello from the other components';
    }

    #[On('resetComponent')]
    public function resetComponent()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.receive-event');
    }
}
