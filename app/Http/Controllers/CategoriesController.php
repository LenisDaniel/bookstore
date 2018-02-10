<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{

    public function index(Request $request, $id)
    {
        if(Auth::user()->is_admin == 1){

            $data = DB::table('books')->join('categories', 'categories.id' , '=', 'books.category_id')->select('books.*', 'categories.category_name')->where('books.category_id', $id)->get();

        }else{

            $data = DB::table('books')->join('categories', 'categories.id' , '=', 'books.id')->select('books.*', 'categories.category_name')->where('books.category_id', $id)->where('books.user_id', '<>', Auth::id())->where('books.approved', 1)->get();
        }

        if(!$data->isEmpty()){
            return view('booklist', ['data' => json_encode($data), 'category_name' => $data[0]->category_name]);
        }else{
            $request->session()->flash('alert-warning', 'This category has no books');
            return view('home');
        }

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
