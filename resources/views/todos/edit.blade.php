<x-layout>
    <x-slot:title>
        {{ $todo->content }}
    </x-slot:title>
    <h1>{{ $todo->content }}</h1>
    <form method="POST" action="/todos/{{ $todo->id }}">
        @csrf
        @method('PUT')
        
        <label>
            <input name="content" value="{{ $todo->content }}" />
        </label>

        <label>Izpildīts:
            <input name="completed" type="checkbox" value="{{ $todo->completed }}">
        </label>

        <br><button>Saglabāt</button>
    </form>
</x-layout>