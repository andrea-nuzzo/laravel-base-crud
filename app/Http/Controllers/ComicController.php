<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    protected $validationComics = 
    [
        "title" => "required|string|max:255",
        "description" => "nullable|string",
        "thumb" => "required|string|max:255",
        "price" => "required|numeric|between:0,9999999.99",
        "series" => "nullable|string|max:100",
        "sale_date" => "nullable|date",
        "type" => "required|string|max:100",
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // Mi predo i dati dal form
         $dataComic = $request->all();
        
        // *----- Validation -----*
        $request->validate($this->validationComics);

        // Avendo inserito il Mass Assignment posso selezionare i dati in maniera massiva.
        $newComic = Comic::create($dataComic);
        // restituisco la route show con il nuovo elemento creato.
        return redirect()->route('comics.show', $newComic->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //Riporta solo all'itinerario dove si trovano i dati
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // Mi predo i dati dal form
        $dataComic = $request->all();
        
        // *----- Validation -----*
        $request->validate($this->validationComics);

        // Avendo inserito il Mass Assignment posso selezionare i dati in maniera massiva.
        $comic->update($dataComic);

        // restituisco la route show con il nuovo elemento creato.
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route("comics.index");
    }
}
