<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
@include('partials.navi')
<div id="zawartosc">
    <h2>Lista książek</h2>
    <table>
        <thead>
            <tr>
                <th>Tytuł</th>
                <th>Kategoria</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ksiazki as $el)
                <tr>
                    <td>{{ $el->tytul }}</td>
                    <td>{{ $el->opis ?? 'Brak kategorii' }}</td>
                    <td>
                        <a href="{{ url('/usun_ksiazki/' . $el->id) }}" 
                           onclick="return confirm('Czy na pewno chcesz usunąć tę książkę?')">
                           Usuń
                        </a>
                        |
                        <a href="{{ url('/ksiazka/edytuj/' . $el->id) }}">Edytuj</a> <!-- Edit link -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
