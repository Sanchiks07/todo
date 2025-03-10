<x-layout>
    <x-slot:title>
        {{ $todo->content }}
    </x-slot:title>
    <div class="container">
        <h1>{{ $todo->content }}</h1>
        <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>

        <a class="edit" href="/todos/{{ $todo->id }}/edit">Rediģēt</a><br>

        <form method="POST" action="/todos/{{ $todo->id }}">
            @csrf
            @method("delete")
            <button>Dzēst</button>
        </form>
    </div>
</x-layout>