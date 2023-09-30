@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Categorie Details</h2>
        {{$categorie}}
        <table class="table">
            <tbody>
                <tr>
                    <td>ID:</td>
                    <td>{{ $categorie->id }}</td>
                </tr>
                <tr>
                    <td>Nom:</td>
                    <td>{{ $categorie->nom }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
