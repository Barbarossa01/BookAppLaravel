<!DOCTYPE html>
<html>
@include('partials.head')

<body>
    @include('partials.navi')

    <div id="zawartosc">
        <h2>Lista wydawnictw</h2>
        <table>
            <thead>
                <tr>
                    <th>Nazwa</th>
                    <th>Adres</th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach($wydawnictwa as $wydawnictwo)
                <tr>
                    <td>{{ $wydawnictwo->nazwa }}</td>
                    <td>{{ $wydawnictwo->adres }}</td>
                    <td>
                        <!-- Delete link -->
                        <a href="{{ route('wydawnictwa.usun', ['id' => $wydawnictwo->id]) }}" 
   onclick="return confirm('Czy na pewno chcesz usunąć to wydawnictwo?')">
   Usuń
</a>
                        |
                        <a href="{{ url('/wydawnictwo/edytuj/' . $wydawnictwo->id) }}">Edytuj</a> <!-- Edit link -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
