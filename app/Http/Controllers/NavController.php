<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Draftsman;

class NavController extends Controller
{
    public function home()
    {
        $characters = Character::all();
        $draftsman = Draftsman::all();
        return view('home',['characters'=>$characters, 'draftsman'=>$draftsman]);
    }

    public function draftsman($id)
    {
        $draftsman = Draftsman::getOne($id);
        return view('draftsman', ['draftsman'=>$draftsman]);
    }

    public function addDraftsman()
    {
        return view('addDraftsman');
    }

    public function updateDraftsman($id)
    {
        $draftsman = Draftsman::getOne($id);
        return view('updatedraftsman', ['draftsman'=>$draftsman]);
    }
    
    public function addCharacter()
    {
        $draftsmen = Draftsman::all();
        return view('addCharacter',['draftsmen'=>$draftsmen]);
    }

    public function updateCharacter($id)
    {
        $character=Character::getOne($id);
        $draftsmen = Draftsman::all();
        return view('updateCharacter', ['character'=>$character, 'draftsmen'=>$draftsmen]);
    }

}
