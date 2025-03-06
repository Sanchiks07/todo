<x-layout>
    <x-slot:title>
        Dienasgrāmata
    </x-slot:title>
    <h1>Dienasgrāmatas ieraksti</h1>
    <ul>
    @foreach ($diaries as $diary)
        <li><a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a></li>
    @endforeach
    </ul>
</x-layout>