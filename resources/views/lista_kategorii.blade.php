<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
@include('partials.navi')
<div id="zawartosc">
    <h2>Lista kategorii</h2>
    <ul>
        @foreach($kategorie as $kategoria)
        <li>
            {{ $kategoria->opis }}
            <a href="{{ url('/usun_kategorie/' . $kategoria->id) }}" 
               onclick="return confirm('Czy na pewno chcesz usunąć tę kategorię?')">
               Usuń
            </a>
            |
            <a href="{{ url('/kategoria/edytuj/' . $kategoria->id) }}">Edytuj</a> <!-- Edit link -->
        </li>
        @endforeach
    </ul>
</div>
</body>
</html>
