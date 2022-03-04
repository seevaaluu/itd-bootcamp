<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::orderBy('id', 'desc')->paginate(10);

        return view('movies.index')
        ->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "category" => "required",
            "realize_date" => "required|date",
            "director" => "required"
        ]);

        $movie = new Movie;
        $movie->name = $request->name;
        $movie->category = $request->category;
        $movie->realize_date = $request->realize_date;
        $movie->director = $request->director;
        $movie->save();

        return "Se guardó con éxito";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        
        return view('movies.edit')
            ->with('movie', $movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required",
            "category" => "required",
            "realize_date" => "required|date",
            "director" => "required"
        ]);

        $movie = Movie::findOrFail($id);
        $movie->name = $request->name;
        $movie->category = $request->category;
        $movie->realize_date = $request->realize_date;
        $movie->director = $request->director;
        $movie->update();

        return redirect('/movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrfail($id);
        $movie->forceDelete();

        return redirect('/movies');
    }
}
