<x-layout>
    <x-slot:title>
        Rediģē uzdevumu
    </x-slot:title>
    <div class="container">
        <h1>Rediģēt uzdevumu: "{{ $todo->content }}"</h1>
        <form method="POST" action="/todos/{{ $todo->id }}">
            @csrf
            @method('PUT')
            
            <label>
                <input name="content" value="{{ $todo->content }}" />
            </label>

            @error("content")
            <p>{{ $message }}</p>
            @enderror<br><br>

            <label>
                Izpildīts:
                <input name="completed" type="hidden" value="{{ $todo->completed }}">
                <input name="completed" type="checkbox" value="1" {{ $todo->completed ? 'checked' : '' }}>   
            </label>
            
            @error("completed")
            <p>{{ $message }}</p>
            @enderror<br>

            <br><button>Saglabāt</button>
        </form>
    </div>
</x-layout>