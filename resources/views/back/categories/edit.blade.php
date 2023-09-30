@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Edit Categorie</h2>
        <form action="{{ route('categories.update', ['categorie' => $categorie->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $categorie->nom }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
