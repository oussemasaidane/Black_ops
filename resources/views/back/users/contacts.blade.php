@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Contacts : {{count($user->contacts)}}</h2>
        
      
        <table class="table" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Message</th>
                    <th>Objet</th>
                    <th>Created at</th>
                 
                </tr>
            </thead>
            <tbody>
                @foreach ($user->contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>{{ $contact->obj_message }}</td>
                        <td>{{ $contact->created_at }}</td>
                      
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr class="solid" style="border-top: 3px solid #bbb;">

    </div>
@endsection
