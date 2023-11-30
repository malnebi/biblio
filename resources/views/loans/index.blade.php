@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Client</th>
                        <th scope="col">Book</th>
                        <th scope="col">Return deadline</th>
                        <th scope="col">Librarian</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        <tr>
                            <td>{{ $loan->id }}</td>
                            <td>{{ $loan->client->first_name }} {{ $loan->client->last_name }}</td>
                            <td>{{ $loan->book->title }} <p> / </p>  {{ $loan->book->author_fname }} {{ $loan->book->author_lname }}</td>
                            <td>{{ $loan->return_deadline }}</td>
                            <td>{{ $loan->user->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
