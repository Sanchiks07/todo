<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
    <div class="container">
    @guest
        <h1>Sveiks, viesi!</h1>

        <img src="rizz_ducky.png" alt="Duck Rizz">
    @endguest
    </div>
</x-layout>