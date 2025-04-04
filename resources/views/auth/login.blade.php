<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>
    <div class="container">
        <h1>Login</h1>
        <form method="POST">
            @csrf

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <label>
                Email<br>
                <input name="email" type="email" value="{{ old('email') }}" required />
            </label><br><br>

            <label>
                Password<br>
                <input name="password" type="password" required />
            </label><br><br>

            <button type="submit">Login</button>
        </form>
    </div>
</x-layout>