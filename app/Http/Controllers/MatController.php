<?php

namespace App\Http\Controllers;

class MatController extends Controller
{
    public function index()
    {
        $matieres = [
            ['code' => 'Algo',   'libelle' => 'Algorithmique',     'coefficient' => 3],
            ['code' => 'DevWeb', 'libelle' => 'Développement Web', 'coefficient' => 3],
        ];

        return view('affMat')->with('matieres', $matieres);
    }
}