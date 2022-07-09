<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
 
    public function index()
    {
        return response()->json(Comic::all());

    }
    public function store(Request $request)
    {
        $comic = Comic::create($request->all());

        return response()->json($comic);
    }

  
    public function destroy(Comic $comic)
    {
       
        $comic->delete();
        return response()->json($comic); 
    }
}
