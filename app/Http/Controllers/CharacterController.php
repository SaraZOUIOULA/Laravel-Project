<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Draftsman;

class CharacterController extends Controller
{
    public static function delete(Request $request)
    {
        Character::destroy($request->id);
        return redirect('/');
    }

    public static function update(Request $request)
    {   
        $character=Character::find($request->id);
        $character->name= $request->name; 
        $character->creation_year=$request->creation_year; 
        $character->strip_cartoon=$request->strip_cartoon; 
        $character->draftsman_id=$request->draftsman_id;
        $character->save();
        return redirect('/');
    }

    public static function add(Request $request)
    {
        $character = new Character;
        $character->name= $request->name; 
        $character->creation_year=$request->creation_year; 
        $character->strip_cartoon=$request->strip_cartoon; 
        $character->draftsman_id=$request->draftsman_id;
        $character->save();
        return redirect('/');
    }
}
