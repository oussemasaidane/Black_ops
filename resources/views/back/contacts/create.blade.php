@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Create New Contact</h2>
     <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="obj_message">Objet:</label>
                <input type="text" class="form-control" style=" 
                border: 1px solid gray; width:50%" id="obj_message" name="obj_message" required>
                <label for="message">Message:</label>
                <input type="text" class="form-control" style=" 
                border: 1px solid gray; width:50%" id="message" name="message" required>
                 <label for="date">Message:</label>
                 <input type="date" class="form-control" style=" 
                 border: 1px solid gray; width:50%" id="date" name="date" required>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Create</button>
        </form>
        <a href="{{ route('contacts.index',) }}" class="btn btn-info">Back</a>

    </div>
@endsection
