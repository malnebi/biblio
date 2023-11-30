@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Create loan for {{ $client->first_name }} {{ $client->last_name }}</h3>
                <form method="POST" action="/loans">
                    @csrf
                    <input type="hidden" name="client_id" value="{{$client->id}}">
                    
                    <div class="form-group">
                        <label>Librarian</label>
                        <select class="form-control" name="user_id">
                            @foreach($users as $user)
                                <option value="{{ $user->id  }}" selected>{{$user->name}}</option>
                                @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label >Book</label>
                        <select class="form-control" name="book_id">
                            @foreach($books as $book)
                                <option value="{{ $book->id }}" selected>{{$book->title}} {{ $book->author_fname }} {{ $book->author_lname }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Loan the book for 30 days</button>
                </form>
            </div>
        </div>
    </div>
@endsection