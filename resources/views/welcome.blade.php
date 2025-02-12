<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Crash Course - Josh Cirre</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="mb-4">
        Send Event: <livewire:send-event />
    </div>

    <div>
        Receive Event: <livewire:receive-event />
    </div>

    {{-- <livewire:bird-form /> --}}
</body>
</html>




