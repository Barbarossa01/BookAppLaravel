<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
@include('partials.navi')
<div id="zawartosc">
    <h2>Edytuj wydawnictwo</h2>
    <form method="POST" action="{{ url('/wydawnictwo/edytuj/' . $wydawnictwo->id) }}">
        @csrf
        @method('POST')
        <label for="nazwa">Nazwa:</label>
        <input type="text" name="nazwa" value="{{ $wydawnictwo->nazwa }}">

        <label for="adres">Adres:</label>
        <input type="text" name="adres" value="{{ $wydawnictwo->adres }}">

        <button type="submit">Zapisz zmiany</button>
    </form>
</div>
</body>
</html>
