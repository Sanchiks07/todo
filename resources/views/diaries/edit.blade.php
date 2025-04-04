<x-layout>
    <x-slot:title>
        Rediģēt ierakstu
    </x-slot:title>
    <div class="container">
        <h1>Rediģēt ierakstu: "{{ $diary->title }}"</h1>
        <form method="POST" action="/diaries/{{ $diary->id }}">
            @csrf
            @method('PUT')
            
            <label>
                Title:<br>
                <input name="title" value="{{ $diary->title }}" />
            </label>

            @error("title")
            <p>{{ $message }}</p>
            @enderror<br><br>
            
            <label>
                Body:<br>
                <textarea name="body" rows="5" cols="30">{{ $diary->body }}</textarea>
            </label><br><br>

            @error("body")
            <p>{{ $message }}</p>
            @enderror<br>

            <label>
                Date:<br>
                <input type="date" name="date" value="{{ $diary->date }}" />
            </label><br>

            @error("date")
            <p>{{ $message }}</p>
            @enderror<br>

            <br><button class="save">Saglabāt</button>
        </form>
    </div>
</x-layout>