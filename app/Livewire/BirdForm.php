<?php

namespace App\Livewire;

use App\Models\Entry;
use Illuminate\Queue\Queue;
use Livewire\Component;

class BirdForm extends Component
{
    public int $count;
    public string $notes;

    public function submit()
    {

        $this->validate([
            'count' => 'required|integer',
            'notes' => 'required|string',
        ]);

        Entry::create([
            'count' => $this->count,
            'notes' => $this->notes,
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.bird-form', [
            'entries' => Entry::all(),
        ]);
    }
}
