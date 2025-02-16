<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
@include('partials.navi')
<div id="zawartosc">
    <h2>Edytuj kategorię</h2>
    <form method="POST" action="{{ url('/kategoria/edytuj/' . $kategoria->id) }}">
        @csrf
        @method('POST')
        <label for="opis">Opis:</label>
        <input type="text" name="opis" value="{{ $kategoria->opis }}">
        <button type="submit">Zapisz zmiany</button>
    </form>
</div>
</body>
</html>
