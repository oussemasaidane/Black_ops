@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Categories</h2>
        <a href="{{ route('categories.create') }}" class="btn btn-success">Create New Categorie</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $categorie)
                    <tr>
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->nom }}</td>
                        <td>
                            <a href="{{ route('categories.show', $categorie->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
