@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Edit user</h2>
         <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">User name:</label>
                <input type="text" class="form-control" style=" 
                border: 1px solid gray; width:50%" id="name" name="name" value="{{ $user->name }}" required>

                <label for="email">Email:</label>
                <input type="text" class="form-control" style=" 
                border: 1px solid gray; width:50%" id="email" name="email" value="{{ $user->email }}" required>
                
                 <label for="role">Role:</label>
                 <select class="form-control" style=" 
                 border: 1px solid gray; width:50%" id="role" name="role" value="{{ $user->role }}" required >
                   <option >admin</option>
                   <option >user</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Update</button>
        </form>
        <a href="{{ route('users.index',) }}" class="btn btn-info">Back</a>

    </div>
@endsection
