<!DOCTYPE html>
<html>

    @include('partials.head')

    <body>
        @include('partials.navi')

        <div id="zawartosc">
            <h2>Dodaj książkę</h2>
            <form class="form-inline" action="./dodaj_ksiazke" method="post">
                @csrf
                <p>
                    <label for="tytul">Tytuł książki</label>
                    <input id="tytul" name="tytul" size="20">
                </p>

                <p>
                    @foreach($kategoria as $el)
                        <input type="radio" name="idkat" id="idkat" value="{{ $el->id }}" checked>
                        <label for="idkat">{{ $el->opis }}</label>
                    @endforeach
                </p>

                <p>
                    <label for="idwyd">Wydawnictwo:</label>
                    <select name="idwyd" id="idwyd">
                        @foreach($wydawnictwo as $item)
                            <option value="{{ $item->id }}">{{ $item->nazwa }}</option>
                        @endforeach    
                    </select>
                </p>

                <p>
                    <button type="submit" class="btn btn-primary mb-2">Dodaj</button>
                </p>
            </form>
        </div>
    </body>
</html>
