<x-layout>
    <x-slot:title>
        Izveidot ierakstu
    </x-slot:title>
    <h1>Izveidot ierakstu</h1>
    <form method="POST" action="/diaries">
        @csrf
        <label>Ttile:
            <input name="title" />
        </label><br><br>

        <label>Body:
            <textarea name="body" rows="5" cols="30"></textarea>
        </label><br><br>

        <label>Date:
            <input type="date" name="date" />
        </label><br>

        @error("title")
            <p>{{ $message }}</p>
        @enderror
        @error("body")
            <p>{{ $message }}</p>
        @enderror
        @error("date")
            <p>{{ $message }}</p>
        @enderror

        <br><button>Saglabāt</button>
    </form>
</x-layout>