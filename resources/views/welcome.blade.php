<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
    <div class="container">
    @guest
        <h1>Sveiks, viesi!</h1>
    @endguest
    </div>
</x-layout>