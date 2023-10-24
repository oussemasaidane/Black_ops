@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Create New User</h2>
     <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">User name:</label>
                <input type="text" class="form-control" style=" 
                border: 1px solid gray; width:50%" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="text" class="form-control" style=" 
                border: 1px solid gray; width:50%" id="email" name="email" required>
                
                 <label for="role">Role:</label>
                 <select class="form-control" style=" 
                 border: 1px solid gray; width:50%" id="role" name="role" required>
                   <option >admin</option>
                   <option >user</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Create</button>
        </form>
        <a href="{{ route('users.index',) }}" class="btn btn-info">Back</a>

    </div>
@endsection
