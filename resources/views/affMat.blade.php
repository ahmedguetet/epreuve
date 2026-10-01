@extends('layouts.template')

@section('titre', 'Liste des matières')

@section('content')
    <h2>Liste des matières</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Code</th>
                <th>Libellé</th>
                <th>Coefficient</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matieres as $m)
                <tr>
                    <td>{{ $m['code'] }}</td>
                    <td>{{ $m['libelle'] }}</td>
                    <td>{{ $m['coefficient'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection