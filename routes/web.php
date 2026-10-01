<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/matiere', function () {
    $matieres = [
        ['code' => 'Algo',   'libelle' => 'Algorithmique',      'coefficient' => 3],
        ['code' => 'DevWeb', 'libelle' => 'Développement Web',  'coefficient' => 3],
    ];
    return view('affMat', ['matieres' => $matieres]);
});

Route::get('/epreuve', function () {
    $epreuves = [
        ['numero' => 1001, 'date' => '23/09/2019', 'lieu' => 110],
        ['numero' => 1002, 'date' => '24/09/2019', 'lieu' => 112],
    ];
    return view('affEpr', ['epreuves' => $epreuves]);
});