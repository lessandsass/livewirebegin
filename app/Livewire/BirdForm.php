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
        Entry::create([
            'count' => $this->pull('count'),
            'notes' => $this->pull('notes'),
        ]);

    }

    public function render()
    {
        return view('livewire.bird-form');
    }
}
