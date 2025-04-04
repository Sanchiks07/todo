<x-layout>
    <x-slot:title>
        {{ $diary->title }}
    </x-slot:title>
    <div class="container">
        <h1 class="h1-td">{{ $diary->title }}</h1>
        <p class="p-d">{{ $diary->body }}</p>
        <p class="p-td">{{ $diary->date }}</p>

        <div class="actions">
            <a class="edit" href="/diaries/{{ $diary->id }}/edit">Rediģēt</a>

            <form method="POST" action="/diaries/{{ $diary->id }}">
                @csrf
                @method("delete")
                <button class="delete">Dzēst</button>
            </form>
        </div>
    </div>
</x-layout>