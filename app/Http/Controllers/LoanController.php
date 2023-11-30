<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Loan;
use App\Models\Book;
use App\Models\User;

use Carbon\Carbon;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $user = Auth::user();
    
            $loans = array();
    
            if($user->role == 'Admin') {
                $loans = Loan::all();
            }
    
            if($user->role == 'Librarian') {
                $loans = $user->loans;
            }
    
            $data = [
                'loans' => $loans,
            ];
    
            return view('loans.index', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($client_id)
    {
        {

            $client = Client::find($client_id);
            $books = Book::where('loan','0')->get();
            $users = User::all();
            
            $data = [
                'client' => $client,
                'books' => $books,
                'users' => $users,
            ];
            
            return view('loans.create', $data);
            
        }
        
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->date;


//        $time = Carbon::parse($request->time);
        
        $loan = new Loan;
        $loan->client_id = $request->client_id;
        $loan->book_id = $request->book_id;
        $loan->user_id = $request->user_id;
        $loan->return_deadline = Carbon::now()->addDays(30);   // rok za vraćanje knjige je 30 dana
        //$loan->return_deadline = $time->format("Y-m-d");
        $loan->save();
    

        return redirect('loans');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
