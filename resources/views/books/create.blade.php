@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="/books">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Authors first name</label>
                        <input class="form-control" name="author_fname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Authors last name</label>
                        <input class="form-control" name="author_lname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Publisher name</label>
                        <input class="form-control" name="publisher_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Publisher place</label>
                        <input class="form-control" name="publisher_place">
                    </div>   
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Year</label>
                        <input class="form-control" name="year">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Loan </label>
                        <input class="form-control" name="loan">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Client</label>
                        <input class="form-control" name="client_id">
                    </div>
                    <div class="form-group">
                        <label for="warranty">Loan a book</label>
                        <select class="form-control" name="loan">
                            <option value="0" selected>Free for loan</option>
                            <option value="1">Book is out </option>
                        </select>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
