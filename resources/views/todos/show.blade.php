<x-layout>
    <x-slot:title>
        {{ $todo->content }}
    </x-slot:title>
    <div class="container">
        <h1 class="h1-td">{{ $todo->content }}</h1>
        <p class="p-td">Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>

        <div class="actions">
            <a class="edit" href="/todos/{{ $todo->id }}/edit">Rediģēt</a>

            <form method="POST" action="/todos/{{ $todo->id }}">
                @csrf
                @method("delete")
                <button class="delete">Dzēst</button>
            </form>
        </div>
    </div>
</x-layout>