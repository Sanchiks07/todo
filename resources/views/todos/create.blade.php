<x-layout>
    <x-slot:title>
        Izveidot uzdevumu
    </x-slot:title>
    <div class="container">
        <h1>Izveidot uzdevumu</h1>
        <form method="POST" action="/todos">
            @csrf

            <label>
                Content:<br><input name="content" />
            </label><br>

            @error("content")
                <p>{{ $message }}</p>
            @enderror

            <br><button class="save">Saglabāt</button>
        </form>
    </div>
</x-layout>