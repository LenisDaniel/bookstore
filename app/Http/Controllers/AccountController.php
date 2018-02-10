<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Payment;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class AccountController extends Controller
{

    public function index()
    {
        $user = User::find(Auth::id())->get();
        if(Auth::user()->is_admin == 1){
            $payment = Payment::find(Auth::id());
            $published_books = DB::table('books')->select('id', 'book_name')->get();
            $purchased_books = DB::table('payments')->join('books', 'payments.book_id' , '=', 'books.id')->select('books.*', 'payments.id')->get();

        }else{
            $payment = Payment::find(Auth::id());
            $published_books = DB::table('books')->select('id', 'book_name')->where('user_id', Auth::id())->get();
            $purchased_books = DB::table('payments')->join('books', 'payments.book_id' , '=', 'books.id')->select('books.*', 'payments.id')->where('payments.user_id', Auth::id())->get();

        }

        return view("/myaccount", ['user' => $user, 'published_books' => json_encode($published_books), 'purchased_books' => json_encode($purchased_books)]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        echo $request;
        exit;
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

        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|max:60',
            'paypal_email' => 'required|email|max:60',
            'phone' => 'required|max:15'
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->paypal_email = $request->paypal_email;
        $user->phone = $request->phone;

        $user->save();

        $request->session()->flash('alert-success', 'User Account Updated');
        return redirect('/account');

    }


    public function destroy($id)
    {
        //
    }
}
