@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="/books/{{$book->id}}">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Autors first name</label>
                        <input class="form-control" name="author_fname" value="{{$book->author_fname}}">
                    </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Last name</label>
                        <input class="form-control" name="author_lname" value="{{$book->author_lname}}">
                        </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input  class="form-control" name="title" value="{{$book->title}}"  >
                        </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Publisher name</label>
                            <input class="form-control" name="publisher_name" value="{{$book->publisher_name}}">
                        </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Publisher place</label>
                            <input class="form-control" name="publisher_place" value="{{$book->publisher_place}}" >
                        </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">year</label>
                            <input class="form-control" name="year"  value="{{$book->year}}">
                        </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Loan</label>
                            <input class="form-control" name="loan"  value="{{$book->loan}}" >
                        </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">client_id</label>
                            <input class="form-control" name="client_id"  value="{{$book->client_id}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection