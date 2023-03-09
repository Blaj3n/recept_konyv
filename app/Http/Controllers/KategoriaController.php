<?php

namespace App\Http\Controllers;

use App\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index()
    {
        $kategorias =  Kategoria::all();
        return $kategorias;
    }

    public function show($id)
    {
        $kategorias = Kategoria::find($id);
        return $kategorias;
    }
    
    public function store(Request $request)
    {
        $kategoria = new Kategoria();
        $kategoria->nev = $request->nev;
        $kategoria->save();
    }

    public function update(Request $request, $id)
    {
        $kategoria = Kategoria::find($id);
        $kategoria->nev = $request->nev;
        $kategoria->save();
    }
    
    public function destroy($id)
    {
        Kategoria::find($id)->delete();
    }
}
