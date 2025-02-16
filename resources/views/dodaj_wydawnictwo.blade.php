<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
@include('partials.navi')
<div id="zawartosc">
    <h2>Dodaj Wydawnictwo</h2>
    <form action="{{ url('/dodaj_wydawnictwo') }}" method="post">
        @csrf
        <p>
            <label for="nazwa">Nazwa Wydawnictwa:</label>
            <input type="text" id="nazwa" name="nazwa" required>
        </p>
        <p>
            <label for="adres">Adres Wydawnictwa:</label>
            <input type="text" id="adres" name="adres" placeholder="Opcjonalne">
        </p>
        <p>
            <button type="submit" class="btn btn-primary">Dodaj</button>
        </p>
    </form>
</div>
</body>
</html>
