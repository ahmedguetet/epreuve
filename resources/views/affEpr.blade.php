@extends('layouts.template')

@section('titre', 'Liste des épreuves')

@section('content')
    <h2>Liste des épreuves</h2>

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
                <th>Numéro</th>
                <th>Date</th>
                <th>Lieu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($epreuves as $e)
                <tr>
                    <td>{{ $e->numepreuve }}</td>
                    <td>{{ $e->datepreuve }}</td>
                    <td>{{ $e->lieu }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h4 class="mt-4">Ajouter une épreuve</h4>
    <form method="POST" action="/epreuve" class="row g-2">
        @csrf
        <div class="col"><input name="numepreuve" type="number" class="form-control" placeholder="Numéro"></div>
        <div class="col"><input name="datepreuve" type="date" class="form-control"></div>
        <div class="col"><input name="lieu" class="form-control" placeholder="Lieu"></div>
        <div class="col"><button class="btn btn-primary">Ajouter</button></div>
    </form>
@endsection