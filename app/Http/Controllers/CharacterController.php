<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
   
    public function index()
    {
       // return response()->json(Character::all());

       return response()->json(Character::where('user_id', Auth()->user()->id)->get());


    }

    public function store(Request $request)
    {
        // $character = Character::create($request->all());

        $character=Character::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'thumbnail'=> $request->thumbnail,
            'linkDetalhe' => $request->linkDetalhe
        ]);

         return response()->json($character);
    }

 
    public function destroy(Character $character)
    {
        $character->delete();
        return response()->json($character); 
    }

}
