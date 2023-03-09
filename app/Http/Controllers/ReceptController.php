<?php

namespace App\Http\Controllers;

use App\Recept;
use Illuminate\Http\Request;

class ReceptController extends Controller
{
    public function index()
    {
        $recepts =  Recept::all();
        return $recepts;
    }

    public function show($id)
    {
        $recepts = Recept::find($id);
        return $recepts;
    }
    
    public function store(Request $request)
    {
        $Recept = new Recept();
        $Recept->nev = $request->nev;
        $Recept->kat_id = $request->kat_id;
        $Recept->kep_eleresi_ut = $request->kep_eleresi_ut;
        $Recept->leiras = $request->leiras;
        $Recept->save();
    }

    public function update(Request $request, $id)
    {
        $Recept = Recept::find($id);
        $Recept->nev = $request->nev;
        $Recept->kat_id = $request->kat_id;
        $Recept->kep_eleresi_ut = $request->kep_eleresi_ut;
        $Recept->leiras = $request->leiras;
        $Recept->save();
    }
    
    public function destroy($id)
    {
        Recept::find($id)->delete();
    }
}
