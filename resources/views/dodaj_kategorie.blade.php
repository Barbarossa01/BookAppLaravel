<!-- dodaj_kategorie.blade.php -->


<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
@include('partials.navi')
<div id="zawartosc">
    <h2>Dodaj Kategorie</h2>
    <form action="{{ route('kategorie.dodaj.submit') }}" method="post">
    @csrf
    <label for="opis">Nazwa kategorii:</label>
    <input type="text" id="opis" name="opis">
    <button type="submit">Dodaj</button>
</form>



</div>
</body>
</html>
