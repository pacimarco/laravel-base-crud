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
        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->type = $data['type'];
        $newComic->sale_date = $data['sale_data'];
        $newComic->series = $data['series'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];

        $newComic->save();

        return redirect()->route('comic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $uscita = Comic::find($id);
        if ($uscita){
        return view('comic.show', compact('uscita'));
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uscita = Comic::find($id);
        if ($uscita){
            return view('comic.edit', compact('uscita'));
        }
        abort(404);
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
        $uscita = Comic::find($id);
        if ($uscita){
            
            $data = $request->all();

            $uscita->title = $data['title'];
            $uscita->description = $data['description'];
            $uscita->type = $data['type'];
            $uscita->sale_date = $data['sale_data'];
            $uscita->series = $data['series'];
            $uscita->thumb = $data['thumb'];
            $uscita->price = $data['price'];
            
            $uscita->save();

            return redirect()->route('comic.index');

        }else{
        abort(404);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uscita = Comic::find($id);

        if ($uscita){
            $uscita->delete();
            return redirect()->route('comic.index');
        }
        else{
            abort(404);
        }

    
    
    }
}
