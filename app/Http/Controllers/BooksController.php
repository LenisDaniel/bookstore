<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{

    public function index()
    {

        $data = DB::table('books')->join('users', 'users.id' , '=', 'books.user_id')->select('books.*', 'users.name')->where('books.approved', 0)->get();
        return view('unapproved', ['data' => json_encode($data)]);

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function is_approved(Request $request)
    {
        $active = $_POST['active'];
        $id = $_POST['book_id'];

        $books = Book::find($id);
        $books->approved = $active;
        $books->save();

        echo 'Process Complete';
    }


    public function show($id)
    {
        $data = DB::table('books')->join('users', 'users.id' , '=', 'books.user_id')->select('books.*', 'users.name')->where('books.id', $id)->get();
        return view('bookdetails', ['data' => $data]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
