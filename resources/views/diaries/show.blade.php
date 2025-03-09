<x-layout>
    <x-slot:title>
        {{ $diary->title }}
    </x-slot:title>
    <div class="container">
        <h1>{{ $diary->title }}</h1>
        <p>{{ $diary->body }}</p>
        <p>{{ $diary->date }}</p>
    </div>
</x-layout>