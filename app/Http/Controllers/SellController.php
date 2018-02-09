<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;
use Illuminate\Support\Facades\Auth;


class SellController extends Controller
{

    public function index()
    {
        $data = DB::table('categories')->select('id', 'category_name')->get();
        return view('/sellbook', ['data' => $data]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'book_name' => 'required|min:3',
            'category_id' => 'required|not_in:Select One Category',
            'descr' => 'required|min:5',
            'author' => 'required|min:5',
            'version' => 'required|min:1',
            'year' => 'required|min:4',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'conditions' => 'required|min:3',
            'price' => 'required|min:3',
        ]);

        $_FILES['picture']['type'];
        $_FILES['picture']['size'];
        $_FILES['picture']['tmp_name'];
        $file_name = $_FILES['picture']['name'];
        $file_ext = $_FILES['picture']['type'];
        $file_size = $_FILES['picture']['size'];
        $path= public_path('/images/');

        if(Auth::user()->paypal_email == "" || Auth::user()->phone == ""){
            $request->session()->flash('alert-danger', 'You must have a phone number and PayPal email to register books. Please edit your account');
            return redirect('/home');
        }

        if(!(strpos($file_ext, "png") || strpos($file_ext, "jpeg") ))
        {
            //echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .png o .jpg<br><li>Se permiten archivos de 300 Kb máximo.</td></tr></table>";
        }
        else
        {
            if(move_uploaded_file($_FILES['picture']['tmp_name'] , $path.$file_name))
            {
                //echo "El archivo ha sido cargado correctamente.";
            }
            else
            {
                //echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
            }
        }

        $books = new Book();
        $books->book_name = $request->book_name;
        $books->user_id = Auth::id();
        $books->category_id = $request->category_id;
        $books->descr = $request->descr;
        $books->author = $request->author;
        $books->version = $request->version;
        $books->year = $request->year;
        $books->picture = $file_name;
        $books->conditions = $request->conditions;
        $books->price = $request->price;
        $books->_token = $request->_token;
        $books->save();

        $request->session()->flash('alert-success', 'Book Register Succesfully');
        return redirect('/home');

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
