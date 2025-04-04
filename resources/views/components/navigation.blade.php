<header>
<nav>
    <ul>
        <li><a href="/">Sākums</a></li>
        <li><a href="/todos">Visi uzdevumi</a></li>
        <li><a href="/todos/create">Izveidot uzdevumu</a></li>
        <li><a href="/diaries">Dienasgrāmata</a></li>
        <li><a href="/diaries/create">Izveidot ierakstu</a></li>
        <li><a href="/why">Why</a></li>
        <li>
            <form method="POST" action="/logout">
                @csrf
                @method("delete")

                <button type="submit">Logout</button>
            </form>
        </li>
    </ul>
</nav>
</header>