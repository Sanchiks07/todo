<x-layout>
    <x-slot:title>
        Veicamie uzdevumi
    </x-slot:title>
    <div class="container">
        <h1>Visi veicamie uzdevumi</h1>
        <ul>
        @foreach ($todos as $todo)
            <li><a href="/todos/{{ $todo->id }}" class="output">{{ $todo->content }}</a></li>
        @endforeach
        </ul>
    </div>
</x-layout>