<?php

namespace App\Http\Controllers;

use App\Models\Draftsman;
use Illuminate\Http\Request;

class DraftsmanController extends Controller
{
    public static function delete(Request $request)
    {
        Draftsman::destroy($request->id);
        return redirect('/');
    }

    public static function update(Request $request)
    {   
        $draftsman=Draftsman::find($request->id);
        $draftsman->name= $request->name; 
        $draftsman->birth_year=$request->birth_year; 
        $draftsman->nationality=$request->nationality;
        $draftsman->save();
        return redirect('/');
    }

    public static function add(Request $request)
    {
        $draftsman = new Draftsman;
        $draftsman->name= $request->name; 
        $draftsman->birth_year=$request->birth_year; 
        $draftsman->nationality=$request->nationality;
        $draftsman->save();
        return redirect('/');
    }
}
