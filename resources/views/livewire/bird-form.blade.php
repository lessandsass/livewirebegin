<div>
    <form wire:submit="submit" class="p-4">

        <div class="mb-3">
            <label for="count">Bird Count</label>
            <input wire:model="count" type="number" class="border-2 border-gray-500 rounded-lg" />
        </div>

        <div class="mb-3">
            <label for="notes">Notes</label>
            <textarea wire:model="notes" class="border-2 border-gray-500 rounded-lg"></textarea>
        </div>

        <button class="bg-gray-600 text-white px-4 py-2 rounded-lg">
            Add a New bird count Entry
        </button>

    </form>

    @if ($errors->any())
        <div class="text-red-500">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        @foreach ($entries as $entry)
            <div class="w-1/2 p-1 mb-2 border-2 border-gray-500 rounded-lg mx-auto">
                <p>Count: {{ $entry->count }}</p>
                <p>Notes: {{ $entry->notes }}</p>
            </div>
        @endforeach
    </div>

</div>
