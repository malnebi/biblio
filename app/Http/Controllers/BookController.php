<?php
namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Book;

use Validator;

use Illuminate\Http\Request;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['bookList']);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        $data = [
            'books' => $books,
        ];

        return view('books.index', $data);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {     
        return view('books.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'year' => ['required', 'string', 'max:10'],
            'title' => ['required', 'string', 'max:200'],
            'loan' => ['integer', 'min:0', 'max:1'],
        ]);

        $book = new Book;
        $book->author_fname = $request->author_fname;
        $book->author_lname = $request->author_lname;
        $book->title = $request->title;
        $book->publisher_name = $request->publisher_name;
        $book->publisher_place = $request->publisher_place;
        $book->year = $request->year;
        $book->loan = $request->loan;
        $book->client_id = $request->client_id;
        $book->save();

        return redirect('books');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        $data = [
            'book' => $book,
        ];
        return view('books.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $book_id)
    {
        $book = Book::find($book_id);
        $book->author_fname = $request->author_fname;
        $book->author_lname = $request->author_lname;
        $book->title = $request->title;
        $book->publisher_name = $request->publisher_name;
        $book->publisher_place = $request->publisher_place;
        $book->year = $request->year;
        $book->loan = $request->loan;
        $book->client_id = $request->client_id;
        
        $book->save();

        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function bookList()
    {
        $books = Book::all();
        $data = [
            'books' => $books,
        ];

        return view('books.list', $data);       
    }
}
