<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
   
    public function index()
    {
        return response()->json(Character::all());

    }

    public function store(Request $request)
    {
         $character = Character::create($request->all());

         return response()->json($character);
    }

 
    public function destroy(Character $character)
    {
        $character->delete();
        return response()->json($character); 
    }

}
