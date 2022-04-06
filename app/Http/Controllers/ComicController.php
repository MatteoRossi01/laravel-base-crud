<?php

namespace App\Http\Controllers;
use App\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(

            [
                "title" =>'required|min:5',
                "price" => 'required|numeric| min:1',
                "description" => 'required|min:10',
                "thumb" => 'required|url',
                "type" => 'required',
                "series" => 'required| min:2',
                "sale_date" => 'required|date',
            ]
        );


        $data = $request->all();

        $newComics = new Comic();
        $newComics->fill($data);
        $newComics->save();

        return redirect()->route('comics.show', $newComics->id)->with('insert', 'Nuovo fumetto inserito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate(

            [
                "title" =>'required|min:5',
                "price" => 'required|numeric| min:1',
                "description" => 'required|min:10',
                "thumb" => 'required|url',
                "type" => 'required',
                "series" => 'required| min:2',
                "sale_date" => 'required|date',
            ]
        );

        $data = $request->all();

        $comic->update($data);

        $comic->save();

        return redirect()-> route('comics.show', $comic->id)->with('insert', 'Fumetto modificato!');;
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

        return redirect()->route('comics.index')->with('status', 'Cancellazione avvenuta!');
    }
}
