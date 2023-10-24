@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Manage Users : </h2>
        <a href="{{ route('users.create') }}" class="btn btn-success">Create New User</a>
        <h4> Admins : {{count($admins)}}</h4>
        <table class="table" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Contact Request</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td style="font-weight: bold;">{{ $user->role }}</td>
                        <td>{{count($user->contacts)}} &nbsp; <a href="google.com"> <i class="fas fa-bars"></i> </a></td>

                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr class="solid" style="border-top: 3px solid #bbb;">
        <h4> Users : </h4>
        <table class="table" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Contact Request</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td style="font-weight: bold;">{{ $user->role }}</td>
                        <td>{{count($user->contacts)}}</td>

                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
