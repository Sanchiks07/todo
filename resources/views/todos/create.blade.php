<x-layout>
    <x-slot:title>
        Izveidot uzdevumu
    </x-slot:title>
    <h1>Izveidot uzdevumu</h1>
    <form method="POST" action="/todos">
        @csrf

        <label>Content:
            <input name="content" />
        </label><br>

        @error("content")
            <p>{{ $message }}</p>
        @enderror

        <br><button>Saglabāt</button>
    </form>
</x-layout>