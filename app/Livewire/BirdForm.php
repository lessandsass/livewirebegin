<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;
use Livewire\Attributes\Validate;

class BirdForm extends Component
{
    #[Validate('required|integer')]
    public int $count;

    #[Validate('required|string')]
    public string $notes;

    public function submit()
    {

        $this->validate();

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
