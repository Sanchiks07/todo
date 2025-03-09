<x-layout>
    <x-slot:title>
        {{ $todo->content }}
    </x-slot:title>
    <div class="container">
        <h1>{{ $todo->content }}</h1>
        <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>

        <button onclick="window.location.href='/todos/{{ $todo->id }}/edit'">Rediģēt</button>
    </div>
</x-layout>