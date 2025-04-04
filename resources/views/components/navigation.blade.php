<header>
<nav>
    <ul>
        @auth
        <li><a href="/todos">Uzdevumi</a></li>
        <li><a href="/todos/create">Izveidot uzdevumu</a></li>
        <li><a href="/diaries">Dienasgrāmata</a></li>
        <li><a href="/diaries/create">Izveidot ierakstu</a></li>
        <form method="POST" action="/logout">
            @csrf
            @method("DELETE")
            <div class="user">
                <p>Sveiks, {{ Auth::user()->first_name}}</p>
                <li><button class="logout">Logout</button></li>
            </div>
        </form>
        @endauth

        @guest
        <li><a href="/">Sākums</a></li>
        <li><a href="/why">Why</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
        @endguest
    </ul>
</nav>
</header>