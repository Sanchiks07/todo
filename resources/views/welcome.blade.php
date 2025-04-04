<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
    <div class="container">
    @guest
        <h1>Sveiks, viesi!</h1>

        <div class="actions">
            <a href="/register">Register</a><br>
            <a href="/login">Login</a>
        </div>
    @endguest
    </div>
</x-layout>