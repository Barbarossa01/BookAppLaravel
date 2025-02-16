<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
@include('partials.navi')
<div id="zawartosc">
    <h2>Edytuj książkę</h2>
    <form method="POST" action="{{ url('/ksiazka/edytuj/' . $ksiazka->id) }}">
        @csrf
        @method('POST')
        <label for="tytul">Tytuł:</label>
        <input type="text" name="tytul" value="{{ $ksiazka->tytul }}">

        <label for="idkat">Kategoria:</label>
        <select name="idkat">
            @foreach($kategorie as $kategoria)
                <option value="{{ $kategoria->id }}" {{ $ksiazka->idkat == $kategoria->id ? 'selected' : '' }}>
                    {{ $kategoria->opis }}
                </option>
            @endforeach
        </select>

        <label for="idwyd">Wydawnictwo:</label>
        <select name="idwyd">
            @foreach($wydawnictwa as $wydawnictwo)
                <option value="{{ $wydawnictwo->id }}" {{ $ksiazka->idwyd == $wydawnictwo->id ? 'selected' : '' }}>
                    {{ $wydawnictwo->nazwa }}
                </option>
            @endforeach
        </select>

        <button type="submit">Zapisz zmiany</button>
    </form>
</div>
</body>
</html>
