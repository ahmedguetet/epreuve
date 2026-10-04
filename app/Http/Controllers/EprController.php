<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EprController extends Controller
{
    public function index()
    {
        $epreuves = DB::table('epreuves')->get();

        return view('affEpr')->with('epreuves', $epreuves);
    }

    public function store(Request $request)
    {
        $request->validate([
            'numepreuve' => 'required|integer|unique:epreuves,numepreuve',
            'datepreuve' => 'required|date',
            'lieu'       => 'required',
        ]);

        DB::table('epreuves')->insert([
            'numepreuve' => $request->numepreuve,
            'datepreuve' => $request->datepreuve,
            'lieu'       => $request->lieu,
        ]);

        return redirect('/epreuve');
    }
}