<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Models\User;
use Illuminate\Http\Request;

class ComicController extends Controller
{
 
    public function index()
    {
       // return response()->json(Comic::all());
        return response()->json(Comic::where('user_id', Auth()->user()->id)->get());


    }
    public function store(Request $request)
    {

        //$comic = Comic::create($request->all());


        $comic=Comic::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'thumbnail'=> $request->thumbnail,
            'linkDetalhe' => $request->linkDetalhe
        ]);

        return response()->json($comic);
    }

  
    public function destroy(Comic $comic)
    {
       
        $comic->delete();
        return response()->json($comic); 
    }
}
