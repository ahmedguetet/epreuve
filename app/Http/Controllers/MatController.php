<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatController extends Controller
{
    public function index()
    {
        $matieres = DB::select('select * from matieres');

        return view('affMat')->with('matieres', $matieres);
    }

    public function store(Request $request)
    {
        $request->validate([
            'codemat' => 'required|unique:matieres,codemat',
            'libelle' => 'required',
            'coef'    => 'required|integer',
        ]);

        DB::insert(
            'insert into matieres (codemat, libelle, coef) values (?, ?, ?)',
            [$request->codemat, $request->libelle, $request->coef]
        );

        return redirect('/matiere');
    }
}