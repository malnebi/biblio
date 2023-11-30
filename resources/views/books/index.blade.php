@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="/books/create" class="btn btn-success">Add new book</a>
                
                
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Authors first name</th>
                        <th scope="col">Authors last name</th>
                        <th scope="col">Title</th>
                        <th scope="col">Publisher name</th>
                        <th scope="col">Publisher place</th>
                        <th scope="col">Year</th>
                        <th scope="col">Loan</th>
                        <th scope="col">Client</th>
                    
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->author_fname }}</td>
                            <td>{{ $book->author_lname }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->publisher_name }}</td>
                            <td>{{ $book->publisher_place }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->loan == 0 ? 'Loan to' : 'Free for loan' }}</td>
                            <td>
                            </td>
                            <td>
                                <a href="/books/{{$book->id}}/edit" class="btn btn-info">EDIT</a>
                            </td>

                        </tr>

                            
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
