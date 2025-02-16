<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PodstawowyKontroler extends Controller
{
    public function zwrocStroneDomowa()
    {
        return view('partials/domowa');    
    }
    
    public function zwrocListeKsiazek()
    {
        // Ensure the select statement is selecting 'ksiazka.id' and not 'kategoria.id'
        $ksiazkiZBazy = DB::table('ksiazka')
            ->leftJoin('kategoria', 'ksiazka.idkat', '=', 'kategoria.id')
            ->select('ksiazka.id', 'ksiazka.tytul', 'kategoria.opis') // Select ksiazka.id
            ->get();
        
        return view('lista_ksiazek', ['ksiazki' => $ksiazkiZBazy]);
    }
    

    public function zwrocDodajKsiazke()
    {
        // Retrieve categories and publishers from the database
        $kategorie = DB::table('kategoria')->get();
        $wydawnictwa = DB::table('wydawnictwo')->get();
    
        // Pass both variables to the view
        return view('dodaj_ksiazke', [
            'kategoria' => $kategorie, // Pass categories
            'wydawnictwo' => $wydawnictwa, // Pass publishers
        ]);
    }
    

    public function dodajKsiazke(Request $request)
    {
        $tytulZFormularza = $request->tytul;
        $idKategoriiZFormularza = $request->idkat;
        DB::table('ksiazka')->insert([
            'tytul' => $request->tytul,
            'idkat' => intval($request->idkat),
            'idwyd' => intval($request->idwyd),
        ]);
        
        return redirect('/ksiazki');

        
    }

    public function zwrocListeKategorii()
    {
        $kategorie = DB::table('kategoria')->get();
        return view('lista_kategorii', ['kategorie' => $kategorie]);
}

public function zwrocListeWydawnictw()
{
    $wydawnictwa = DB::table('wydawnictwo')->get();
    return view('lista_wydawnictw', ['wydawnictwa' => $wydawnictwa]);
}

public function zwrocDodajKategorie()
{
    return view('dodaj_kategorie');
}

public function dodajKategorie(Request $request)
{
    DB::table('kategoria')->insert(['opis' => $request->opis]);
    return redirect('/kategorie');
}
public function zwrocDodajWydawnictwo()
{
    return view('dodaj_wydawnictwo');
}

public function dodajWydawnictwo(Request $request)
{
    // Insert into the correct columns
    DB::table('wydawnictwo')->insert([
        'nazwa' => $request->nazwa,  // Assuming "nazwa" corresponds to "opis" in the form
        'adres' => $request->adres,  // Optional: Include address if provided
    ]);

    return redirect('/wydawnictwa'); // Redirect back to the list of publishers
}

public function usunKsiazke($id)
{
    DB::table('ksiazka')->where('id', $id)->delete();
    return redirect('/ksiazki');
}

public function usunKategorie($id)
{
    DB::table('kategoria')->where('id', $id)->delete();
    return redirect('/kategorie');
}

public function usunWydawnictwo($id)
{
    DB::table('wydawnictwo')->where('id', $id)->delete();
    return redirect('/wydawnictwa');
}



public function zwrocEdytujKsiazke($id)
{
    $ksiazka = DB::table('ksiazka')->where('id', $id)->first();
    $kategorie = DB::table('kategoria')->get();
    $wydawnictwa = DB::table('wydawnictwo')->get();

    return view('edytuj_ksiazke', [
        'ksiazka' => $ksiazka,
        'kategorie' => $kategorie,
        'wydawnictwa' => $wydawnictwa
    ]);
}

public function edytujKsiazke(Request $request, $id)
{
    DB::table('ksiazka')->where('id', $id)->update([
        'tytul' => $request->tytul,
        'idkat' => intval($request->idkat),
        'idwyd' => intval($request->idwyd),
    ]);

    return redirect('/ksiazki');
}


// Assuming you are passing the ID from the URL
public function zwrocEdytujKategorie($id)
{
    // Ensure that the ID is an integer (you can use type casting)
    $id = (int) $id;
    
    // Retrieve the category by ID
    $kategoria = DB::table('kategoria')->where('id', $id)->first();

    if (!$kategoria) {
        // Handle the case where the category is not found
        abort(404, 'Kategoria not found');
    }

    // Pass the category data to the view
    return view('edytuj_kategorie', ['kategoria' => $kategoria]);
}


public function edytujKategorie(Request $request, $id)
{
    DB::table('kategoria')->where('id', $id)->update([
        'opis' => $request->opis,
    ]);

    return redirect('/kategorie');
}


public function zwrocEdytujWydawnictwo($id)
{
    // Retrieve the publisher details
    $wydawnictwo = DB::table('wydawnictwo')->where('id', $id)->first();

    return view('edytuj_wydawnictwo', ['wydawnictwo' => $wydawnictwo]);
}


public function edytujWydawnictwo(Request $request, $id)
{
    DB::table('wydawnictwo')->where('id', $id)->update([
        'nazwa' => $request->nazwa,
        'adres' => $request->adres,
    ]);

    return redirect('/wydawnictwa');
}


}

?>