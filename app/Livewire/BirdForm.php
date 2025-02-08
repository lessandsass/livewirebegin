<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;

class BirdForm extends Component
{
    public int $count;
    public string $notes;

    public function submit()
{
    Entry::create($this->pull());
}

    public function render()
    {
        return view('livewire.bird-form');
    }
}
