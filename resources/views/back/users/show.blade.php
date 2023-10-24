@extends('back.layout')

@section('content')
    <div class="container">
        <h2>User Details</h2>
       
        <table class="table">
            <tbody>
                <tr>
                    <td>ID:</td>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>{{ $user->password }}</td>
                </tr>
               
            </tbody>
        </table>
        <a href="{{ route('users.index',) }}" class="btn btn-info">Back</a>
    </div>
@endsection
