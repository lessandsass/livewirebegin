<div>
    <h1>Let's send an event</h1>

    <input
        type="text"
        wire:model.blur="message"
        class="border-2 border-gray-500 rounded-lg py-2 px-4"
    >

    <button
        wire:click="sendMessage"
        class="bg-green-600 text-white px-4 py-2 rounded-lg"
    >
        Send message
    </button>

    <button
        wire:click="resetComponent"
        class="bg-green-600 text-white px-4 py-2 rounded-lg"
    >
        Reset component
    </button>
</div>
