
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="/clients/create" class="btn btn-success">Add new client</a>
                
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First name</th>
                            <th scope="col">Last name</th>
                            <th scope="col">School_role</th>
                            <th scope="col">Class</th>
                            <th scope="col">Head class teacher</th>
                            <th scope="col">School subject</th>
                            <th scope="col">e-mail</th>
                            <th scope="col">Telefon</th>
                            <th scope="col">Actions</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                        <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->first_name }}</td>
                        <td>{{ $client->last_name }}</td>
                        <td>{{ $client->school_role }}</td>
                        <td>{{ $client->class }}</td>
                        <td>{{ $client->head_class_teacher }}</td>
                        <td>{{ $client->school_subject }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>
                            <a href="/loans/create/{{$client->id}}" class="btn btn-success">Borrow a book</a>
                            <a href="/clients/{{$client->id}}/edit" class="btn btn-info">EDIT</a>
                            <form method="POST" action="/clients/{{$client->id}}" style="display: inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                        
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection