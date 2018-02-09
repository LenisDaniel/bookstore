<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{

    public function index($id)
    {

        $data = DB::table('books')->join('users', 'users.id' , '=', 'books.user_id')->select('books.*', 'users.name')->where('books.id', $id)->get();
        return view('bookdetails', ['data' => $data]);

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
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
