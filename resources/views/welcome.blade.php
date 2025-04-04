<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
    <div class="container">
    @auth
        <h1>Sveiks, {{ Auth::user()->first_name}}</h1>

        <form method="POST" action="/logout">
            @csrf
            @method("delete")

            <button type="submit">Logout</button>
        </form>
    @endauth

    @guest
        <h1>Sveiks, viesi!</h1>

        <div class="actions">
            <a href="/register">Register</a><br>
            <a href="/login">Login</a>
        </div>
    @endguest
    </div>
</x-layout>