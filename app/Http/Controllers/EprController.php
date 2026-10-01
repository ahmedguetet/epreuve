<?php

namespace App\Http\Controllers;

class EprController extends Controller
{
    public function index()
    {
        $epreuves = [
            ['numero' => 1001, 'date' => '23/09/2019', 'lieu' => 110],
            ['numero' => 1002, 'date' => '24/09/2019', 'lieu' => 112],
        ];

        return view('affEpr')->with('epreuves', $epreuves);
    }
}