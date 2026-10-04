@extends('layouts.template')

@section('titre', 'Liste des matières')

@section('content')
    <h2>Liste des matières</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $e)
                <div>{{ $e }}</div>
            @endforeach
        </div>
    @endif

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
                    <td>{{ $m->codemat }}</td>
                    <td>{{ $m->libelle }}</td>
                    <td>{{ $m->coef }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h4 class="mt-4">Ajouter une matière</h4>
    <form method="POST" action="/matiere" class="row g-2">
        @csrf
        <div class="col"><input name="codemat" class="form-control" placeholder="Code"></div>
        <div class="col"><input name="libelle" class="form-control" placeholder="Libellé"></div>
        <div class="col"><input name="coef" type="number" class="form-control" placeholder="Coef"></div>
        <div class="col"><button class="btn btn-primary">Ajouter</button></div>
    </form>
@endsection