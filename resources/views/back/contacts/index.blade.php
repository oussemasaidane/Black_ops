@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Contacts</h2>
        <a href="{{ route('contacts.create') }}" class="btn btn-success">Create New Contact</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Message</th>
                    <th>Objet</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>{{ $contact->obj_message }}</td>
                        <td>{{ $contact->date }}</td>

                        <td>
                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection