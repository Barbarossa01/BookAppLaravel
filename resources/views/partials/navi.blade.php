<nav>
    <div>
        <div>
            <!-- Use absolute paths with `url()` -->
            <a href="{{ url('/welcome') }}">Strona domowa<span>(current)</span></a>
            <a href="{{ url('/ksiazki') }}">Książki</a>
            <a href="{{ url('/kategorie') }}">Kategorie</a>
            <a href="{{ url('/wydawnictwa') }}">Wydawnictwa</a>
            <a href="{{ url('/dodaj_kategorie') }}">Dodaj kategorię</a>
            <a href="{{ url('/dodaj_ksiazke') }}">Dodaj książkę</a>
            <a href="{{ url('/dodaj_wydawnictwo') }}">Dodaj wydawnictwo</a>

            @if(Auth::check()) <!-- Check if user is authenticated -->
                <!-- Add the Dashboard link -->
                <a href="{{ url('/dashboard') }}">Panel użytkownika</a>

                <!-- Logout link -->
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   Wyloguj
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <!-- Login and Register links for guests -->
                <a href="{{ route('login') }}">Zaloguj</a>
                <a href="{{ route('register') }}">Zarejestruj</a>
            @endif
        </div>
    </div>
</nav>
