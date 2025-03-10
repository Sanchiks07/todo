<x-layout>
    <x-slot:title>
        Izveidot ierakstu
    </x-slot:title>
    <div class="container">
        <h1>Izveidot ierakstu</h1>
        <form method="POST" action="/diaries">
            @csrf
            <label>
                Ttile:<br><input name="title" />
            </label><br><br>

            @error("title")
                <p>{{ $message }}</p>
            @enderror

            <label>
                Body:<br><textarea name="body" rows="5" cols="30"></textarea>
            </label><br><br>

            @error("body")
                <p>{{ $message }}</p>
            @enderror

            <label>
                Date:<br><input type="date" name="date" />
            </label><br>
            
            @error("date")
                <p>{{ $message }}</p>
            @enderror

            <br><button>Saglabāt</button>
        </form>
    </div>
</x-layout>