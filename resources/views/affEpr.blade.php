@extends('layouts.template')

@section('titre', 'Liste des épreuves')

@section('content')
    <h2>Liste des épreuves</h2>
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
                    <td>{{ $e['numero'] }}</td>
                    <td>{{ $e['date'] }}</td>
                    <td>{{ $e['lieu'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
